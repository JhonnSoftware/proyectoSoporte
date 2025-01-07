<x-app-layout>
    <div class="container mt-5">
        <h1>Carrito de Compras</h1>
        @if (!empty($productos) && count($productos) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $carrito[$producto->id]['cantidad'] }}</td>
                            <td>S/ {{ number_format($producto->precioUnitario, 2) }}</td>
                            <td>S/
                                {{ number_format($carrito[$producto->id]['cantidad'] * $producto->precioUnitario, 2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No tienes productos en tu carrito.</p>
        @endif
        <a href="{{ route('Productos') }}" class="btn btn-primary">Seguir comprando</a>
    </div>
</x-app-layout>
