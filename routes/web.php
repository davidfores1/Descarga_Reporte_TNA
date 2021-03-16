<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContraController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/cliente', function () {
    return view('cliente.cliente');
});

 

//middleware() para que respete la autenticacion
Route::resource('persona',PersonaController::class)->middleware('auth');
Route::resource('pdf',PDFController::class)->middleware('auth');
;

//cancela el registro y recordar contraseña del login
// Auth::routes(['register'=>false,'reset'=>false]);
Auth::routes();

Route::get('/home', [PersonaController::class, 'index'])->name('home');
Route::get('/pdf/{id}', [PDFController::class, 'show'])->name('descargar');
Route::get('/validar', [ContraController::class, 'ValidarC'])->name('validarCon');
Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');
Route::get('/registro', [UsuarioController::class, 'showForm'])->name('registro');
Route::post('/crearR', [UsuarioController::class, 'create'])->name('crearR');
Route::post('/validator', [UsuarioController::class, 'validator'])->name('validar');


// Route::group(['middleware' => 'auth'], function () {
  
// Route::get('/', [PersonaController::class, 'index'])->name('home');

// });
