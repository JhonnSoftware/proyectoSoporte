<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Detalles del producto" />
        <meta name="author" content="Tu Nombre" />
        <title>Detalles del Producto</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Contenido de la página -->
        <div class="container mt-5">
            <div class="row">
                <!-- Imagen del producto -->
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $id_producto->fotografia) }}" class="img-fluid"
                        alt="{{ $id_producto->nombre }}">
                </div>
                <!-- Información del producto -->
                <div class="col-md-6">
                    <h1>{{ $id_producto->nombre }}</h1>
                    <p class="text-muted">{{ $id_producto->descripcion }}</p>
                    <h4 class="text-primary">S/ {{ number_format($id_producto->precioUnitario, 2) }}</h4>
                    <div class="mt-4">
                        <a href="{{ route('Productos') }}" class="btn btn-secondary">Volver a productos</a>
                        <button class="btn btn-success">Comprar ahora</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

</x-app-layout>
