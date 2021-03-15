<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContraController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('auth.login');
});

 

//middleware() para que respete la autenticacion
Route::resource('persona',PersonaController::class)->middleware('auth');
Route::resource('pdf',PDFController::class)->middleware('auth');
// Route::resource('usuario',UsuarioController::class)->middleware('auth');

//cancela el registro y recordar contraseña del login
// Auth::routes(['register'=>false,'reset'=>false]);
Auth::routes();

Route::get('/home', [PersonaController::class, 'index'])->name('home');
Route::get('/pdf/{id}', [PDFController::class, 'show'])->name('descargar');
Route::get('/validar', [ContraController::class, 'ValidarC'])->name('validarCon');
Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');
Route::get('/registro', [UsuarioController::class, 'showForm'])->name('registro');


// Route::group(['middleware' => 'auth'], function () {
  
// Route::get('/', [PersonaController::class, 'index'])->name('home');

// });
