@extends('usuario.base')

@section('title', 'Listado de Usuarios')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Listado de Usuarios</h3>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Agregar Usuario</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nombre }}</td>
                            <td>{{ $user->apellido }}</td>
                            <td>{{ $user->cedula }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
