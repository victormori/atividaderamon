<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PrincipalController;

// rota para Missão, Chef
Route::get('/chef', [PrincipalController::class, 'chef']);

// rota para Meu Primeiro Cartão de Visita Online
Route::get('/card', [PrincipalController::class, 'card']);

// rota para Meu Primeiro Perfil Online
Route::get('/profile', [PrincipalController::class, 'profile']);