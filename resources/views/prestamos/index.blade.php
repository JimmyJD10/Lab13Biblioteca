@extends('layouts.app')

@section('content')
    <h1>Listado de Préstamos</h1>
    <a href="{{ route('prestamos.create') }}">Crear Préstamo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Libro</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestamos as $prestamo)
                <tr>
                    <td>{{ $prestamo->id }}</td>
                    <td>{{ $prestamo->usuario->nombre }}</td>
                    <td>{{ $prestamo->libro->título }}</td>
                    <td>{{ $prestamo->fecha_inicio }}</td>
                    <td>{{ $prestamo->fecha_fin }}</td>
                    <td>{{ $prestamo->estado }}</td>
                    <td>
                        <a href="{{ route('prestamos.show', $prestamo) }}">Ver</a>
                        <a href="{{ route('prestamos.edit', $prestamo) }}">Editar</a>
                        <form action="{{ route('prestamos.destroy', $prestamo) }}" method="POST" style="display:inline;">
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
