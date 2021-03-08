<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;


Route::get('/', function () {
    return view('auth.login');
});
 
Route::resource('persona',PersonaController::class);
Auth::routes();


Route::get('/home', [App\Http\Controllers\PersonaController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
  
Route::get('/', [App\Http\Controllers\PersonaController::class, 'index'])->name('home');

});
