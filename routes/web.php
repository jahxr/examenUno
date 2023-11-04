<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;
use App\Models\directorio;
use App\Models\contacto;

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



Route::get('/', [DirectorioController::class ,'index'])->name('directorioo');
Route::get('/contacto/crearEntrada', [ContactoController::class ,'create'])->name('crearContacto');
Route::get('/directorio/crearEntrada', [DirectorioController::class ,'crear'])->name('crearEntrada');

Route::post('/directorio/guardar',[DirectorioController::class,'store'])->name('guardarEntrada');
Route::post('/contacto/guardar',[ContactoController::class,'store'])->name('guardarcontacto');
Route::get('/contacto/vercontactos', [ContactoController::class ,'vercontactos']);


Route::get('/contacto/buscarentrada', [ContactoController::class ,'buscarentrada'])->name('buscarentrada');

Route::get('/contacto/ver', [ContactoController::class ,'ver'])->name('ver');

Route::get('/contacto/eliminar', [ContactoController::class ,'eliminar'])->name('eliminar');



