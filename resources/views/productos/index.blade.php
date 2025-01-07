@extends('layouts.plantilla')
@section('content')
    <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#agregarProducto">
        Registrar Producto
    </button>

    <table class="table table-light">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio Unitario</th>
                <th>Stock</th>
                <th>Estado</th>
                <th>Fotografia</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->codigo }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precioUnitario }}</td>
                <td>{{ $producto->stock }}</td>
                <td>{{ $producto->estado }}</td>
                <td>
                    @if($producto->fotografia)
                        <img src="{{ asset('storage/' . $producto->fotografia) }}" alt="Foto de Producto" width="50" height="50">
                    @else
                        <span>No disponible</span>
                    @endif
                </td>
                <td>{{ $producto->id_categoria }}</td>
                <td>
                    <button class="btn btn-danger">Eliminar</button>
                    <button class="btn btn-warning">Editar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="agregarProducto" tabindex="-1" role="dialog" aria-labelledby="ProductoModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ProductoModal">Agregar Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de registro -->
                    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="codigo">Código</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo"
                                        placeholder="Ingrese el código" value="{{ $nuevoCodigo }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Ingrese el nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion"
                                    placeholder="Ingrese su descripcion" required>
                                </div>
                                <div class="form-group">
                                    <label for="precioUnitario">Precio Unitario</label>
                                    <input type="text" class="form-control" id="precioUnitario" name="precioUnitario"
                                        placeholder="Ingrese el precio unitario" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input type="text" class="form-control" name="stock" id="stock"
                                        placeholder="Ingrese el stock">
                                </div>
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <select class="form-control" id="estado" name="estado" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_categoria">Categoria</label>
                                    <select class="form-control" id="id_categoria" name="id_categoria" required>
                                        @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fotografia">Foto</label>
                                    <input type="file" class="form-control" id="fotografia" name="fotografia" accept="image/*" required>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Guardar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
