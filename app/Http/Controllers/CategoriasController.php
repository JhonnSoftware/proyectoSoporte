<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function index()
    {

        $categorias = Categorias::all();

        return view('categorias.index', compact('categorias'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
        ]);

        Categorias::create([
            'id' => $request->id,
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('categorias.index');
    }

    public function eliminarCategoria($id)
    {

        $categoria = Categorias::findOrFail($id);

        $categoria->delete();

        return redirect()->route('categorias.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $categoria = Categorias::findOrFail($id);
        $categoria->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('categorias.index');
    }
}
