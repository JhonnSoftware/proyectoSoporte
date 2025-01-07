<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
    public function index(){

        $users = User::all();
        return view('usuarios.index', compact('users'));
    }

    public function store(Request $request){
        
        $request->validate([
            'name'=> 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $fotoPath = null;

        if($request->hasFile('foto')){
            $fotoPath = $request->file('foto')->store('fotos', 'public');
        }

        User::create([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email,
            'role' => $request->role,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Formulario enviado correctamente');
    }
}
