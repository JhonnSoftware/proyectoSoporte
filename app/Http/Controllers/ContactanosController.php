<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;

class ContactanosController extends Controller
{
    public function index(){
        return view('Contactanos');
    }

    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|digits:8', // Para DNI de 8 dígitos
            'edad' => 'required|integer|min:1|max:120', // Para edades válidas
            'correo' => 'required|email|max:255',
            'telefono' => 'required|numeric|digits_between:9,15',
            'empresa' => 'required|string|max:255',
        ]);

        Contactos::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request->dni,
            'edad' => $request->edad,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'empresa' => $request->empresa,
        ]);

        return redirect()->route('Contactanos')->with('sucess', 'Formulario enviado correctamente');   
    }

    
}
