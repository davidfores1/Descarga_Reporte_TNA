<?php

// Desarrollador: David Forero
// Version 1.0

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContraController;
use App\Http\Controllers\UsuarioController;


//ruta principal
Route::get('/', function () {
    return view('auth.login');
});

//ruta para paciente cliente
Route::get('/cliente', function () {
    return view('cliente.cliente');
});

 
//middleware() para que respete la autenticacion
Route::resource('persona',PersonaController::class)->middleware('auth');
// Route::resource('pdf',PDFController::class)->middleware('auth');
Route::resource('usuario',UsuarioController::class)->middleware('auth');

//cancela opcion registro en la vista del login
Auth::routes(['register'=>false]);
// Auth::routes();

//Agrupar rutas que comparten un Middleware
Route::group(['middleware' => 'auth'], function () {
  
    Route::get('/home', [PersonaController::class, 'index'])->name('home');
    Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');
    Route::get('/registro', [UsuarioController::class, 'showForm'])->name('registro');
    Route::post('/crearR', [UsuarioController::class, 'create'])->name('crearR');
    // Route::get('/editar', [UsuarioController::class, 'edit'])->name('editarUsuario');

});

// Rutas publicas
Route::get('/validar', [ContraController::class, 'ValidarC'])->name('validarCon');
Route::get('/pdf/{id}', [PDFController::class, 'show'])->name('descargar');
