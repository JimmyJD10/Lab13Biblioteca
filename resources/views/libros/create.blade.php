@extends('layouts.app')

@section('content')
    <h1>Listado de Libros</h1>
    <a href="{{ route('libros.create') }}">Crear Libro</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->nombre }}</td>
                    <td>{{ $libro->anio }}</td>
                    <td>{{ $libro->autor->nombre }}</td>
                    <td>{{ $libro->editorial->nombre }}</td>
                    <td>
                        <a href="{{ route('libros.show', $libro) }}">Ver</a>
                        <a href="{{ route('libros.edit', $libro) }}">Editar</a>
                        <form action="{{ route('libros.destroy', $libro) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
