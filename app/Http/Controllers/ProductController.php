<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        if (request('categoria'))
        {   
            $category = Category::where('slug', request('categoria'))->first();
            $products = Product::where('category_id', $category->id)->limit(8)->get();
        } else 
        {
            $products = Product::limit(8)->get();
        }

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', [
        'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:products,slug',
            'description' => 'required|min:25|max:255',
            'price' => 'required',
            'image' => 'required|image'
        ]);

        $attributes['image'] = request()->file('image')->store("images", 's3');

        Product::create($attributes);

        return redirect('/admin/produtos')->with('success', 'Produto Cadastrado com sucesso!');
    }

    public function show(Product $product)
    {
        $similars = Product::where('category_id', $product->category->id)->where('id','!=',$product->id)->limit(4)->get();

        return view('products.show', [
            'product' => $product,
            'similars' => $similars
        ]);
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $attributes = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|min:3|max:255',
            'slug' => ['required', 'min:3', 'max:255', Rule::unique('products','slug')->ignore($product->id)],
            'description' => 'required|min:25|max:255',
            'price' => 'required',
            'image' => 'image'
        ]);

        if (array_key_exists('image', $attributes)) {
            $attributes['image'] = request()->file('image')->store("images", 's3');
        }        
        
        $product->update($attributes);

        return redirect('/admin/produtos')->with('success', 'Produto Editado com sucesso!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success', 'Produto apagado com sucesso!');
    }
}
