<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function signup(Request$request){
        return Cliente::create($request->all());
    }

    public function login(Request $request){
        $correo=$request->input('correo');
        $clave=$request->input('clave');

        $cliente=Cliente::select('clave')->where('correo',$correo)->first();

        return $cliente;
    }

    public function showAll(){
        return Cliente::All();
    }
}
