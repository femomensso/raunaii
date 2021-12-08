<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class MenuCategory extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('components.menu-category', [
            'categories' => $categories
        ]);
    }
}
