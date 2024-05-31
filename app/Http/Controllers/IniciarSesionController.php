<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class IniciarSesionController extends Controller
{
    public function login(){
        return view('IniciarSesion/Login');
    }
    // public function Registro(){
    //     return view('IniciarSesion/Registro');
    // }
    // public function Cambio(){
    //     return "Este es la pagina de cambio contraseña";
    // }
}
