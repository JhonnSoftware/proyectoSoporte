<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class EcommerceController extends Controller
{
    public function productos()
    {

        $productos = Productos::all();

        return view('Productos', compact('productos'));
    }

    public function detalleProducto($id)
    {
        $id_producto = Productos::findOrFail($id);

        return view('DetalleProducto', compact('id_producto'));
    }

    public function agregarAlCarrito(Request $request)
    {
        // Recuperar el carrito de la sesión o inicializar uno nuevo
        $carrito = session()->get('carrito', []);

        // Obtener el ID del producto y su cantidad
        $productoId = $request->input('producto_id');
        $cantidad = $request->input('cantidad', 1); // Por defecto, agregar 1

        // Agregar o actualizar el producto en el carrito
        if (isset($carrito[$productoId])) {
            $carrito[$productoId]['cantidad'] += $cantidad;
        } else {
            $carrito[$productoId] = [
                'producto_id' => $productoId,
                'cantidad' => $cantidad,
            ];
        }

        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);

        // Redirigir con un mensaje de éxito
        return redirect()->route('Productos')->with('success', 'Producto añadido al carrito');
    }

    public function verCarrito()
    {
        // Obtener el carrito de la sesión
        $carrito = session()->get('carrito', []);

        // Opcional: Recuperar los detalles de los productos desde la base de datos
        $productos = [];
        if (!empty($carrito)) {
            $productos = \App\Models\Productos::whereIn('id', array_keys($carrito))->get();
        }

        return view('carrito', compact('carrito', 'productos'));
    }
}
