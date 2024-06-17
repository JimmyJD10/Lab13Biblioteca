@extends('layouts.app')

@section('content')
    <h1>Detalle del Libro</h1>
    <div>
        <strong>ID:</strong> {{ $libro->id }}
    </div>
    <div>
        <strong>Nombre:</strong> {{ $libro->nombre }}
    </div>
    <div>
        <strong>Año:</strong> {{ $libro->anio }}
    </div>
    <div>
        <strong>Autor:</strong> {{ $libro->autor->nombre }}
    </div>
    <div>
        <strong>Editorial:</strong> {{ $libro->editorial->nombre }}
    </div>
    <a href="{{ route('libros.index') }}">Volver</a>
@endsection
