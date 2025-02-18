<?php

use App\Http\Controllers\ProyectoController;
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

Route::get('/', [ProyectoController::class, 'index']);



Route::resource('proyectos', ProyectoController::class);
Route::get('proyectos/informe/pdf', [ProyectoController::class, 'generarInformePDF'])->name('proyectos.informe.pdf');
