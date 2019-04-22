<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilizador;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }

    public function confirmarLogin()
    {
        
        return request()->validate([
            'nome' => 'required',
            'email' => 'required',
        ]);
        
    }

    public function registo()
    {
        return view('Login.registo');
    }

    public function confirmarRegisto()
    {
        request()->validate([
            'nome' => ['required'],
            
            'email' => ['required', 'email'],
            'password' => ['required'],
            'confirmarPassword' => ['required', 'password_confirmation'],
        ]);

        Utilizador::create([
            'login' => request()->nome,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'estado' => 1,
            'tipo' => 1,
        ]);

        return redirect('/login');
        
    }
}
