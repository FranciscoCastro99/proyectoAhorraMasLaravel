<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registroCreate(){
        return view('IniciarSesion.Registro');
    }

    public function registroStore(Request $request){
        $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'ID' =>'required',
            'email' => 'required',
            'FirstPassword' => 'requerid',
            'SecondPassword' => 'requerid',
        ]);

        $regitro = new Registro();
        $regitro ->FirstName->$request->FirstName;
        $regitro ->SecondName->$request->SecondName;
        $regitro ->ID->$request->ID;
        $regitro ->Email->$request->Email;
        $regitro ->FirstPassword->$request->FirstPassword;
        $regitro ->SecondPassword->$request->SecondPassword;
        $regitro ->save();
    }
}
