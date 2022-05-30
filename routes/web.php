<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\NodoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\VlanController;


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

Route::resource('personas', PersonaController::class);

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('alumnos', AlumnoController::class);
Route::resource('carreras', CarreraController::class);
Route::resource('departamentos', DepartamentoController::class);
Route::resource('dispositivos', DispositivoController::class);
Route::resource('nodos', NodoController::class);
Route::resource('tipos', TipoController::class);
Route::resource('vlans', VlanController::class);