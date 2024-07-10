@extends('usuario.base')

@section('title', 'Agregar Usuario')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Agregar Nuevo Usuario</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cedula">Cedula:</label>
                    <input type="text" name="cedula" id="cedula" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
