<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminNavbar extends Component
{
    public function render()
    {
        $name = ucfirst(auth()->user()->first_name) . ' ' . ucfirst(auth()->user()->last_name);
        return view('components.admin.navbar', [
            'name' => $name
        ]);
    }
}
