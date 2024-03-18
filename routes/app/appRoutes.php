<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::middleware('log.acesso', 'autenticacao:padrao,visitante')
  ->prefix('/app')->group(function () {
    Route::get("/clientes", [ClienteController::class, 'index'])->name('app.clientes');

    Route::get("/fornecedores", [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::post("/fornecedores/listar", [FornecedorController::class, "listar"])->name("app.fornecedor.listar");
    Route::get("/fornecedores/adicionar", [FornecedorController::class, "adicionar"])->name("app.fornecedor.adicionar");
    Route::post("/fornecedores/adicionar", [FornecedorController::class, "adicionar"])->name("app.fornecedor.adicionar");

    Route::get("/produtos", [ProdutoController::class, 'index'])->name('app.produtos');

    Route::get("/home", [HomeController::class, 'index'])->name("app.home");
    Route::get("/sair", [LoginController::class, 'sair'])->name("app.sair");
  });
