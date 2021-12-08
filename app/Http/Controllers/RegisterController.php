<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:30',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255'
        ]);

        User::create($attributes);

        return redirect('/')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'Usuario apagado com sucesso!');
    }
}
