<?php

// Desarrollador: David Forero
// Version 1.0

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContraseController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ContarController;


//ruta principal login
Route::get('/', function () {
    return view('auth.login');
});

//ruta para paciente cliente
Route::get('/cliente', function () {
    return view('cliente.cliente');
});

 
//middleware() para que respete la autenticacion
Route::resource('paciente',PacienteController::class)->middleware('auth');
// Route::resource('pdf',PDFController::class)->middleware('auth');
Route::resource('usuario',UsuarioController::class)->middleware('auth');

//cancela opcion registro en la vista del login
Auth::routes(['register'=>false]);
// Auth::routes();

//Agrupar rutas que comparten un Middleware
Route::group(['middleware' => 'auth'], function () {

    //Muestra todo los usuarios
    Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');
    //Redirige al formulario de registro
    Route::get('/registro', [UsuarioController::class, 'showForm'])->name('registro');
    //Crear registro de usuario nuevo
    Route::post('/crearR', [UsuarioController::class, 'create'])->name('crearR');
    
     //Muestra todo los pacientes
     Route::get('/home', [PacienteController::class, 'index'])->name('home');
    //Cargar archivo excel
    Route::get('/cargarPacientes', [PacienteController::class, 'showCargarPacientes'])->name('cargarPacientes');
    //Importar archivo excel con plantilla adjunta para cargar datos de los pacientes
    Route::post('/importPacientes', [PacienteController::class, 'importPacientes'])->name('importPacientes');
    //Exporta archivo de excel con estructura para realizar carge
    Route::GET('/exportPacientes', [PacienteController::class, 'exportPacientes'])->name('exportPacientes');
});

// Rutas publicas
//valida contraseña al cliente para poder ver su resultado y poder descargar
Route::get('/validar', [ContraseController::class, 'ValidarC'])->name('validarCon');
//descarga de pdf segun el paciente
Route::get('/pdf/{id}', [PDFController::class, 'show'])->name('descargar');

