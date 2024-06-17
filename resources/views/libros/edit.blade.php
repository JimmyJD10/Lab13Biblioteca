@extends('layouts.app')

@section('content')
    <h1>Editar Libro</h1>
    <form action="{{ route('libros.update', $libro) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}" required>
        </div>
        <div>
            <label for="anio">Año:</label>
            <input type="number" name="anio" id="anio" value="{{ $libro->anio }}" required>
        </div>
        <div>
            <label for="autor_id">Autor:</label>
            <select name="autor_id" id="autor_id">
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{ $libro->autor_id == $autor->id ? 'selected' : '' }}>{{ $autor->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="editorial_id">Editorial:</label>
            <select name="editorial_id" id="editorial_id">
                @foreach($editoriales as $editorial)
                    <option value="{{ $editorial->id }}" {{ $libro->editorial_id == $editorial->id ? 'selected' : '' }}>{{ $editorial->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
