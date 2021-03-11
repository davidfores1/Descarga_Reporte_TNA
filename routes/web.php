<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PDFController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/cliente', function () {
    return view('cliente.cliente');
});
 
//middleware() para que respete la autenticacion
Route::resource('persona',PersonaController::class)->middleware('auth');
Route::resource('pdf',PDFController::class)->middleware('auth');

//cancela el registro y recordar contraseña del login
Auth::routes(['register'=>false,'reset'=>false]);


Route::get('/home', [PersonaController::class, 'index'])->name('home');
Route::get('/pdf/{id}', [PDFController::class, 'show'])->name('descargar');

// Route::group(['middleware' => 'auth'], function () {
  
// Route::get('/', [PersonaController::class, 'index'])->name('home');

// });
