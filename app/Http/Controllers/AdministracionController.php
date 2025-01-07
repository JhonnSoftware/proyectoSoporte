<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class AdministracionController extends Controller
{
    public function index(){
        return view('Administracion');
    }

    public function listaTicket(){
        $tickets = Ticket::all();
        return view('listaTicket', compact('tickets'));
    }
}
