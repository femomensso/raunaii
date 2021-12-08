<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::latest()->paginate(7);

        return view('admin.users', [
            'users' => $users
        ]);
    }

    public function categories()
    {
        $categories = Category::latest()->with(['products'])->paginate(10);

        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function products()
    {
        $products = Product::latest()->with(['category'])->paginate(10);
        return view('admin.products.index', [
            'products' => $products
        ]);
    }
}
