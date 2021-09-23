<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ElectrodomesticosController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);
Route::get('/electrodomesticos', [ElectrodomesticosController::class, 'Electrodomesticos']);
Route::get('/categorias/uno', [CategoriasController::class, 'categoria1']);
Route::get('/categorias/dos', [CategoriasController::class, 'categoria2']);
Route::get('/categorias/tres', [CategoriasController::class, 'categoria3']);
Route::get('/categorias/cuatro', [CategoriasController::class, 'categoria4']);
Route::get('/categorias/cinco', [CategoriasController::class, 'categoria5']);

Route::get('/categorias/seis', [CategoriasController::class, 'categoria6']);
Route::get('/categorias/siete', [CategoriasController::class, 'categoria7']);
Route::get('/categorias/ocho', [CategoriasController::class, 'categoria8']);
Route::get('/categorias/nueve', [CategoriasController::class, 'categoria9']);






