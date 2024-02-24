<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//index routes
require_once('app/indexRoutes.php');

//app routes
require_once('app/appRoutes.php');

Route::fallback(function () {
    echo "Fallback Route <br>Redirect to <a href=" . route('index') . ">Home</a>";
});
