<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:categories,slug'
        ]);

        Category::create($attributes);

        return redirect('/admin/categorias')->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3|max:255',
            'slug' => ['required', 'min:3', 'max:255', Rule::unique('categories','slug')->ignore($category->id)]
        ]);

        $category->update($attributes);

        return redirect('/admin/categorias')->with('success', 'Categoria Editada com sucesso!');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'Categoria apagada com sucesso!');
    }
}
