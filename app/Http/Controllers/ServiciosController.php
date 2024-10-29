<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function NuevoServicio(){
        return view('nuevoServicio');
    }
}
