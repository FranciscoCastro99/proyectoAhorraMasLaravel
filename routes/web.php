<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IniciarSesionController;

Route::get('/', HomeController::class);
Route::get('/login', [IniciarSesionController::class, 'login']);
// Route::get('/login/registro', [IniciarSesionController::class, 'Registro']);]
Route::get('/login/cambio', [IniciarSesionController::class, 'Cambio']);

Route::get('/registro', [RegistroController::class,'registroCreate' ])->name('registro_Create');
Route::get('/registro/datos', [RegistroController::class,'registroStore'])->name('registro_Store');
