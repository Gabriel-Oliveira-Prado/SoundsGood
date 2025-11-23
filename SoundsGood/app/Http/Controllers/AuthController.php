<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('Login');
    }

    public function auth(Request $request){
        $credenciais = $request->validate([
            'email'=> ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('Atividades');
        } else {
            return redirect()->back()-> with('erro','Usuario ou Senha invalido');
        }
    }

    public function register(Request $request)
    {
        // Validação dos dados
        $request-> validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
        ]);

        // Criar usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Logar automaticamente


        // Redirecionar para página inicial após cadastro
        return redirect()-> route('/Atividades');
    }
}
