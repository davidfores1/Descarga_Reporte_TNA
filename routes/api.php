<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//cuenta  descargas , al momento de dar clic en descargar se gerena el evento, ruta llamada por el archivo contarDescarga.js
Route::get('contarDescarga', [ContarController::class, 'contarDescarga'])->name('contarDescarga');
//muestra la suma de toda las descargas, ruta llamada por el archivo contarDescarga.js
Route::get('mostrarCanDescarga', [ContarController::class, 'mostrarCanDescarga'])->name('mostrarCanDescarga');