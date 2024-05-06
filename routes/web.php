<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IniciarSesionController;

Route::get('/', HomeController::class);
Route::get('/login', [IniciarSesionController::class, 'login']);
Route::get('/login/registro', [IniciarSesionController::class, 'Registro']);
Route::get('/login/cambio', [IniciarSesionController::class, 'Cambio']);

