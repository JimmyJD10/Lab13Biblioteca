@extends('layouts.app')

@section('content')
    <h1>Crear Préstamo</h1>
    <form action="{{ route('prestamos.store') }}" method="POST">
        @csrf
        <div>
            <label for="usuario_id">Usuario:</label>
            <select name="usuario_id" id="usuario_id">
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="libro_id">Libro:</label>
            <select name="libro_id" id="libro_id">
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->título }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" required>
        </div>
        <div>
            <label for="fecha_fin">Fecha Fin:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" required>
        </div>
        <div>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <option value="prestado">Prestado</option>
                <option value="devuelto">Devuelto</option>
            </select>
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection
