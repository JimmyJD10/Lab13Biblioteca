@extends('layouts.app')

@section('content')
    <h1>Detalle del Usuario</h1>
    <div>
        <strong>ID:</strong> {{ $usuario->id }}
    </div>
    <div>
        <strong>Nombre:</strong> {{ $usuario->nombre }}
    </div>
    <div>
        <strong>DNI:</strong> {{ $usuario->dni }}
    </div>
    <div>
        <strong>Dirección:</strong> {{ $usuario->direccion }}
    </div>
    <a href="{{ route('usuarios.index') }}">Volver</a>
@endsection
