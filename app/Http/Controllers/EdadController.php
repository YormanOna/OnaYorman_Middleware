<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdadController extends Controller
{
    public function mostrarFormulario()
    {
        return view('edad.formulario');
    }

    public function procesarEdad(Request $request)
    {
        //
    }
}
