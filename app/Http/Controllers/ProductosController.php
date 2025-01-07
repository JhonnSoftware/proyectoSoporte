<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function index(){

        $productos = Productos::all();
        $categorias = Categorias::all();

        // Obtén el último ID registrado y genera el nuevo código
        $ultimoProducto = Productos::latest('id')->first();
        $nuevoCodigo = 'P000-' . str_pad(($ultimoProducto ? $ultimoProducto->id + 1 : 1), 4, '0', STR_PAD_LEFT);
        return view('productos.index', compact('productos', 'categorias', 'nuevoCodigo'));
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required',
            'descripcion' => 'required',
            'precioUnitario' => 'required',
            'stock' => 'required',
            'estado' => 'required|integer',
            'fotografia' => 'nullable|image|mimes:jpg,jpeg,png',
            'id_categoria' => 'required|integer'
        ]);

        $fotoPath = null;
        if($request->hasFile('fotografia')){
            $fotoPath = $request->file('fotografia')->store('productos', 'public');
        }

        Productos::create([
            'nombre' => $request->nombre,
            'codigo' => $request->codigo,
            'descripcion' => $request->descripcion,
            'precioUnitario' => $request->precioUnitario,
            'stock' => $request->stock,
            'estado' => $request->estado,
            'fotografia' => $fotoPath,
            'id_categoria' => $request->id_categoria,
        ]);

        return redirect()->route('productos.index');
    }
}
