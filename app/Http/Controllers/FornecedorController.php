<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            [
                'nome' => 'fornecedor 1',
                'status' => "N"
            ],
            [
                'nome' => 'fornecedor 2',
                'status' => 'N'
            ]
        ];
        return view("app/fornecedor/index", compact('fornecedores'));
    }
}