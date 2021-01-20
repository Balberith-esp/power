<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\UserAuth;
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
// ->Vista de registro
Route::get('/Registro', [UsuariosController::class,'index'])->name('Registro.index');
// ->Control de login
Route::post("user",[UserAuth::class,'userLogin']);

// LogOut
Route::get('/LogOut', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return view('Home');
});
