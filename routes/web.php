<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\NutricionController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
// use PDF;
use App\Mail\ContactoMailable;
use App\Models\Ejercicio;
use App\Models\Role;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

// Raiz
Route::get('/', function () {
    return view('Home');
})->name('home');

// Rutas para los index
Route::get('/Entrenamientos', function () {
    return view('Entrenamientos.index');
})->name('Entrenamientos.index');

Route::get('/Nutricion', function () {
    return view('Nutricion.index');
})->name('Nutricion.index');




Route::get('/Perfil', [UsuariosController::class,'show'])->name('Perfil.show');



// // // // // // // // // // // // // // // //

Route::get('/muestraUsuarios', [UsuariosController::class,'todos']);

Route::get('/buscaUsuario/{id}', [UsuariosController::class,'fof']);




// // // // // // // // // // // // //

// Sesion de usuarios

// ->Control de login
Route::post("user",[UserAuth::class,'userLogin'])->name('Login.compruebaUsuario');

// LogOut
Route::get('/LogOut', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return view('Home');
})->name('logOut');

// // // // // // // // // // // // ////


// Registro

// ->Vista de registro
Route::get('/Registro', [UsuariosController::class,'index'])->name('Registro.index');

// ->Crea registro
Route::post('/Registro', [UsuariosController::class,'store'])->name('Registro.creaUsuario');

Route::post('/modfica/usuario', [UsuariosController::class,'update'])->name('modificar.usuario');


// // // // // // // // // // // // // //

// Emails

Route::get('/enviaEmail/{tipo}', [Controller::class,'enviaEmail'])->name('Email.enviar');

// Ejercicios

Route::post('/Rutina',[EjercicioController::class,'store'])->name('Rutina.creaRutina');

// Dietas

Route::post('/Dieta',[NutricionController::class,'store'])->name('Dieta.creaDieta');

// Administracion

// Index
Route::get('/Administracion', [AdministracionController::class,'index'])
        ->name('Administracion.index')
        ->middleware('compruebaPermisos');

// Insercion datos
Route::get('/Data', [AdministracionController::class,'insercionDatos'])
        ->name('insercionDatos')
        ->middleware('compruebaPermisos');

// Control usuarios
Route::get('/UserControl', [AdministracionController::class,'controlUsuarios'])
        ->name('controlUsuarios')
        ->middleware('compruebaPermisos');

Route::get('/UserControl/update',[AdministracionController::class, 'actualizaUsuarios'])->name('usuarios.aplicaCambios');


// Historial

//Registro de historiales
Route::post('/nuevoHistorial', [HistorialController::class,'store'])->name('historial.nuevo');

// PDF
Route::get('/pdf/descarga/dieta/{item}', [PDFController::class,'generaDietaPDF'])->name('dieta.descargar');

Route::get('/pdf/descarga/ejercicio/{item}', [PDFController::class,'generaEjercicioPDF'])->name('ejercicio.descargar');


