<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación Laravel')</title>
</head>
<body>
    <header>
        <h1>Bienvenido a {{ $siteName }}</h1>
        <nav>
            <!-- Menú de navegación -->
        </nav>
    </header>

    <div class="content">
        @yield('content')  <!-- Contenido específico de cada vista -->
    </div>

    <footer>
        <p>&copy; 2024 Mi Aplicación Laravel</p>
    </footer>
</body>
</html>
