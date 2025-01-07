@extends('layouts.plantilla')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Agregar Nuevo Usuario</h1>

    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#agregarUsuarioModal">
        Agregar Usuario
    </button>

    <table class="table table-light">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal para agregar usuario -->
    <div class="modal fade" id="agregarUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="agregarUsuarioLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarUsuarioLabel">Agregar Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de registro -->
                    <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Ingrese el nombre del usuario">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo: </label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Ingrese el correo electronico">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña: </label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Ingre su contraseña">
                        </div>
                        <div>
                            <label for="role">Rol:</label>

                            <select class="form-control" name="role" id="role" required>
                                <option value="user">Usuario</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto:</label>
                            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary mt-1">Registrar</button>
                        <button type="submit" class="btn btn-secondary mt-1">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
