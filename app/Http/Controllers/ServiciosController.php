<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class ServiciosController extends Controller
{
    
    public function generarTicket(){
        return view('servicios.generarTicket');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'asunto' => 'required',
        ]);

        Ticket::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'asunto' => $request->asunto,
        ]);

        return redirect()->route('dashboard')->with('success', 'Formulario enviado correctamente');
    }


}
