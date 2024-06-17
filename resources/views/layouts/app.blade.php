<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Biblioteca Leyendo Horizontes</h1>
        <nav>
            <ul>
                <li><a href="{{ route('prestamos.index') }}">Préstamos</a></li>
                <li><a href="{{ route('prestamos.create') }}">Nuevo Préstamo</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
