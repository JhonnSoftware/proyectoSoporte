@extends('layouts.plantilla')
@section('content')
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#agregarCategoria">
        Agregar Categoria
    </button>

    <table class="table table-light">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>
                        <!-- Botón Eliminar con clase para manejar el evento -->
                        <a href="#" class="btn btn-danger btn-eliminar" data-id="{{ $categoria->id }}">Eliminar</a>
                        <!-- Botón Actualizar -->
                        <button class="btn btn-warning" data-toggle="modal"
                            data-target="#actualizarCategoria{{ $categoria->id }}">
                            Actualizar
                        </button>
                    </td>
                </tr>

                <!-- Modal de Actualización -->
                <div class="modal fade" id="actualizarCategoria{{ $categoria->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="CategoriaModal{{ $categoria->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="CategoriaModal{{ $categoria->id }}">Actualizar Categoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulario de actualización -->
                                <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" id="form-actualizar">
                                    @csrf
                                    @method('PUT') <!-- Método PUT para actualización -->
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            value="{{ $categoria->nombre }}" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Actualizar Categoria</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

    <!-- Modal para agregar categoría (ya existente en tu código) -->
    <div class="modal fade" id="agregarCategoria" tabindex="-1" role="dialog" aria-labelledby="CategoriaModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CategoriaModal">Agregar Nueva Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de registro -->
                    <form action="{{ route('categorias.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Ingrese el nombre" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Categoria</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.btn-eliminar').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Evitar que se siga el enlace inmediatamente

                const categoriaId = this.getAttribute('data-id'); // Obtener el ID de la categoría
                const url = 'http://localhost/proyectoSoporte/public/categorias/eliminarCategoria/' +
                    categoriaId; // Construir la URL de eliminación

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirigir a la ruta de eliminación
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                        window.location.href = url;
                    }
                });
            });
        });

        document.querySelectorAll('#form-actualizar').forEach(form => {
            form.addEventListener('submit', function(event) {
                // Mostrar la alerta de éxito cuando se hace clic en "Actualizar Categoria"
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Actualizado Corectamente",
                    showConfirmButton: false,
                    timer: 1500
                });

                // Después de mostrar la alerta, el formulario se envía
                event.preventDefault(); // Prevenir envío directo del formulario
                this.submit(); // Enviar el formulario después de la alerta
            });
        });
    </script>
@endsection
