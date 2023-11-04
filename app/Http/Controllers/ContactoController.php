<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function vercontacto(){
        return view ('vercontacto')
    }
}
    {public function create(){
        return view ('crearEntrada')
    }
}

{public function buscarentrada(){
    return view ('buscarEntrada')
}
}
{public function ver(){
    return view ('ver')
}
}
{public function eliminar(){
    return view ('eliminar')
}
}