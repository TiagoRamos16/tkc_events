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
        
        $dados = request()->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        $utilizador = Utilizador::where('email',request()->email)->first();

        if($utilizador != null && Hash::check(request()->password, $utilizador->password) == true){

            session(['utilizadorAutenticado' => $utilizador]);

            // dump(session('utilizadorAutenticado'));

            // session()->forget('utilizadorAutenticado');
            return redirect('/eventos/home');
        }else{
            return redirect('/login')->with('mensagemErro', 'Erro a introduzir dados')->withInput($dados);
        }
        
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
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        Utilizador::create([
            'login' => request()->nome,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'estado' => 1,
            'tipo' => 1,
        ]);

        return redirect('/login')->with('mensagemSucesso', 'Registo com sucesso');;
        
    }
}
