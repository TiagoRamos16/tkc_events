<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $atributos = request()->validate([
            'nome' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'confirmarPassword' => ['required'],
        ]);

        //add bd

        redirect('/');
        
    }
}
