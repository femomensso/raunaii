<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        
        if (auth()->attempt($attributes)){
            return redirect('/')->with('success', 'Seja bem vindo!');
        }

        return back()->withErrors(['email' => 'Nao foi possivel validar suas credenciais!']);
    }

    public function delete()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Volte sempre!');
    }
}
