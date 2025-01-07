@extends('layouts.plantilla')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Lista de Tickets</h1>

<!-- Tickets Table -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Asunto</th>
                        <th>Fecha de Creación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->id_ticket }}</td>
                            <td>{{ $ticket->nombre }}</td>
                            <td>{{ $ticket->telefono }}</td>
                            <td>{{ $ticket->asunto }}</td>
                            <td>{{ $ticket->created_at ?? 'No disponible' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
