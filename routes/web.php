<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;


Route::get('/', function () {
    return view('auth.login');
});
 
//middleware() para que respete la autenticacion
Route::resource('persona',PersonaController::class)->middleware('auth');
Route::resource('pdf',PDFController::class)->middleware('auth');

//cancela el registro y recordar contraseña del login
Auth::routes(['register'=>false,'reset'=>false]);


Route::get('/home', [App\Http\Controllers\PersonaController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\PDFController::class, 'PDF'])->name('descargarPDF');

Route::group(['middleware' => 'auth'], function () {
  
Route::get('/', [App\Http\Controllers\PersonaController::class, 'index'])->name('home');

});
