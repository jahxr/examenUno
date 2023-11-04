<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contacto;

class ContactoController extends Controller
{
    public function vercontacto(){
        return view ('vercontacto');
    }
    public function create(){
        return view ('crearEntrada');
    }

    public function store(Request $request){
        $contacto= new contacto();
        
        $contacto->nombre=$request->input("nombre");
        $contacto->apellido=$request->input("apellido");
        $contacto->telefono=$request->input("telefono");
        $contacto->correo=$request->input("correo");
        $contacto->save();
    }


public function buscarentrada(){
    return view ('buscar');
}

public function ver(){
    return view ('ver');
}

public function eliminar(){
    return view ('eliminar');
}
}