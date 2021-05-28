<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ClausulaController;
use App\Http\Controllers\EmpresaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/creacion', function () {
    return view('creacion');
});

Route::resource('contrato', ContratoController::class);
Route::resource('perfil', PerfilController::class);
Route::resource('clausula', ClausulaController::class);
Route::resource('empresa', EmpresaController::class);
