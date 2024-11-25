<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function generarTicket(){
        return view('servicios.generarTicket');
    }
}
