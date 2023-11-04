<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\directorio;

class DirectorioController extends Controller
{
    public function index(){
        $directorios =  directorio::all();
        return view ('directorio',compact('directorios'));
    }
    public function crear(){
        return view ('crearEntrada');
    }
    public function store(Request $request){
        $directorio= new directorio();
        $directorio->codigoEntrada=$request->input("codigo");
        
        $directorio->nombre=$request->input("nombre");
        $directorio->apellido=$request->input("apellido");
        $directorio->telefono=$request->input("telefono");
        $directorio->correo=$request->input("correo");
        $directorio->save();
        return view ('directorio');
    }
}
