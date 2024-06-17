@extends('layouts.app')

@section('content')
    <h1>Detalle del Préstamo</h1>
    <div>
        <strong>ID:</strong> {{ $prestamo->id }}
    </div>
    <div>
        <strong>Usuario:</strong> {{ $prestamo->usuario->nombre }}
    </div>
    <div>
        <strong>Libro:</strong> {{ $prestamo->libro->título }}
    </div>
    <div>
        <strong>Fecha Inicio:</strong> {{ $prestamo->fecha_inicio }}
    </div>
    <div>
        <strong>Fecha Fin:</strong> {{ $prestamo->fecha_fin }}
    </div>
    <div>
        <strong>Estado:</strong> {{ $prestamo->estado }}
    </div>
    <a href="{{ route('prestamos.index') }}">Volver</a>
@endsection
