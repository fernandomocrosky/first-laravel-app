<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
  Route::get('/', [PrincipalController::class, 'index'])->name('site.index');

  Route::get('/sobre-nos', [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');

  Route::get("/contato", [ContatoController::class, 'contato'])->name('site.contato');
  Route::post("/contato", [ContatoController::class, 'salvar'])->name('site.contato');

  Route::get("/login", [LoginController::class, 'index'])->name('site.login');
  Route::post("/login", [LoginController::class, 'autenticar'])->name('site.login');
});
