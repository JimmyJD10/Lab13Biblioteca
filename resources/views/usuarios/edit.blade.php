@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $usuario->nombre }}" required>
        </div>
        <div>
            <label for="dni">DNI:</label>
            <input type="text" name="dni" id="dni" value="{{ $usuario->dni }}" required>
        </div>
        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" value="{{ $usuario->direccion }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
