<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PanelPrincipalController extends Controller
{
    public function index()
{
    // Verifica si el usuario está autenticado
    if (Auth::check()) {
        return view('panelPrincipal'); // O la vista que desees mostrar
    }

    // Si no está autenticado, redirige al login
    return redirect()->route('login.index')->with('error', 'Por favor, inicia sesión primero.');
}
}
