@extends('layouts.app')

@section('content')
    <h1>Editar Préstamo</h1>
    <form action="{{ route('prestamos.update', $prestamo) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="usuario_id">Usuario:</label>
            <select name="usuario_id" id="usuario_id">
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $prestamo->usuario_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="libro_id">Libro:</label>
            <select name="libro_id" id="libro_id">
                @foreach($libros as $libro)
                    <option value="{{ $libro->id }}" {{ $prestamo->libro_id == $libro->id ? 'selected' : '' }}>{{ $libro->título }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $prestamo->fecha_inicio }}" required>
        </div>
        <div>
            <label for="fecha_fin">Fecha Fin:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" value="{{ $prestamo->fecha_fin }}" required>
        </div>
        <div>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <option value="prestado" {{ $prestamo->estado == 'prestado' ? 'selected' : '' }}>Prestado</option>
                <option value="devuelto" {{ $prestamo->estado == 'devuelto' ? 'selected' : '' }}>Devuelto</option>
            </select>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
