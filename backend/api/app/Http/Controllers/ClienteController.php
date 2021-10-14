<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use JWTAuth;

class ClienteController extends Controller
{
    public function signup(Request $request){
        return Cliente::create($request->all());
        
    }

    public function login(Request $request){
        $correo = $request->input('correo');
        $clave = $request->input('clave');

        $cliente = Cliente::select('clave')->where('correo', $correo)->first();

        return $cliente;
    }

    public function update(Request $request){
        $cliente= Cliente::findOrFail($request->doc);
        $cliente->correo=$request->correo;
        $cliente->nombre=$request->nombre;
        $cliente->apellidos=$request->apellidos;
        $cliente->save();

        return $cliente;
    }

    public function find(Request $request){
        $cliente= Cliente::findOrFail($request->doc);
        return $cliente;
    }

    public function showAll(){
        return Cliente::All();
    }
}
