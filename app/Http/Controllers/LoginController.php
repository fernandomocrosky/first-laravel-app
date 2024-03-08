<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request)
    {
        $regras = [
            'usuario' => 'required|email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.required' => 'O campo usuário é obrigatório',
            'usuario.email' => 'O campo usuário necessita de formato de e-mail válido',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $senha = $request->get('senha');

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $senha)->get()->first();

        if (isset($usuario->name)) {
            echo 'usuário existe';
        }
    }
}
