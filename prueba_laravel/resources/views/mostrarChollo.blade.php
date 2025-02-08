<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Chollo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center">📢 {{ $chollo->titulo }}</h1>

        <table class="table table-bordered">
            <tr><th>Categoría</th><td>{{ $chollo->categoria->name }}</td></tr>
            <tr><th>Descripción</th><td>{{ $chollo->descripcion }}</td></tr>
            <tr><th>URL</th><td><a href="{{ $chollo->url }}" target="_blank">{{ $chollo->url }}</a></td></tr>
            <tr><th>Puntuación</th><td>{{ $chollo->puntuacion }} ⭐</td></tr>
            <tr><th>Precio</th><td>💰 {{ $chollo->precio }}€</td></tr>
            <tr><th>Precio Descuento</th><td>🔥 {{ $chollo->precio_descuento }}€</td></tr>
        </table>

        <form action="{{ route('regresar') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-secondary">⬅️ Volver</button>
        </form>
    </div>

    <footer class="text-center mt-5 p-3 bg-light">
        <p>Julen © Chollos 2025</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
