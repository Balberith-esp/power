<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


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

Route::get('/Perfil', function () {
    return view('Perfil.index');
})->name('Perfil.index');


// Inicio de sesion

// Registro
// ->Acceso
Route::get('/Registro', [UsuariosController::class,'index'])->name('Registro.index');
// ->Save



// Rutas para Crear
// Route::get('/Entrenamientos', function () {
//     return view('Entrenamientos.index');
// })->name('Entrenamientos.index');

// Route::get('/Nutricion', function () {
//     return view('Nutricion.index');
// })->name('Nutricion.index');

// Route::get('/Perfil', function () {
//     return view('Perfil.index');
// })->name('Perfil.index');


// Rutas para editar
// Route::get('/Entrenamientos', function () {
//     return view('Entrenamientos.index');
// })->name('Entrenamientos.index');

// Route::get('/Nutricion', function () {
//     return view('Nutricion.index');
// })->name('Nutricion.index');

// Route::get('/Perfil', function () {
//     return view('Perfil.index');
// })->name('Perfil.index');

// Rutas para mostrar
// Route::get('/Entrenamientos', function () {
//     return view('Entrenamientos.index');
// })->name('Entrenamientos.index');

// Route::get('/Nutricion', function () {
//     return view('Nutricion.index');
// })->name('Nutricion.index');

// Route::get('/Perfil', function () {
//     return view('Perfil.index');
// })->name('Perfil.index');
