<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\ContadorDeVistasController;

// Ruta para registrar la vista y mostrar el contador general
Route::get('/contador', [ContadorDeVistasController::class, 'registrarVista'])->defaults('formulario', 'contador');

// Ruta para mostrar y registrar la visita del formulario 1
Route::get('/formulario1', [ContadorDeVistasController::class, 'registrarVista'])->name('formulario1')->defaults('formulario', 'formulario1');

// Ruta para mostrar y registrar la visita del formulario 2
Route::get('/formulario2', [ContadorDeVistasController::class, 'registrarVista'])->name('formulario2')->defaults('formulario', 'formulario2');
