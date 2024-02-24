<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

Route::prefix('/app')->group(function () {
  Route::get("/clientes", [ContatoController::class, 'clientes'])->name('clientes');

  Route::get("/fornecedores", [FornecedorController::class, 'index'])->name('fornecedores');

  Route::get("/produtos", [ContatoController::class, 'produtos'])->name('produtos');
});
