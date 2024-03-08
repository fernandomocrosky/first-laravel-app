<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil): Response
    {
        if ($metodo_autenticacao == 'padrao') {
            echo 'Verificar o usuário no banco de dados';
        }
        if ($metodo_autenticacao == 'idap') {
            echo 'Verificar o usuário e senha';
        }
        return Response('Acesso negado rota exige autenticação');
    }
}
