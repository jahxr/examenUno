<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Models\directorio;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio', [DirectorioController::class ,'index'])->name('directorioo');


Route::get('/contacto/vercontactos', [ContactoController::class ,'vercontactos']);

Route::get('/contacto/crearEntrada', [ContactoController::class ,'create'])->name('crearEntrada');

Route::get('/contacto/buscarentrada', [ContactoController::class ,'buscarentrada'])->name('buscarentrada');

Route::get('/contacto/ver', [ContactoController::class ,'ver'])->name('ver');

Route::get('/contacto/ver', [ContactoController::class ,'eliminar'])->name('eliminar');



