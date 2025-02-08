<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chollos Destacados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center">⭐ Chollos Destacados ⭐</h1>

        <div class="mb-3">
            <a href="{{ route('chollos.index') }}" class="btn btn-secondary">⬅️ Volver a Chollos</a>
        </div>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Puntuación</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($destacados as $chollo)
                    <tr>
                        <td><a href="{{ route('chollos.show', $chollo->id) }}">{{ $chollo->titulo }}</a></td>
                        <td>{{ $chollo->categoria->name }}</td>
                        <td>⭐ {{ $chollo->puntuacion }}</td>
                        <td>💰 {{ $chollo->precio_descuento }}€</td>
                        <td>
                            <a href="{{ route('chollos.edit', $chollo->id) }}" class="btn btn-primary">✏️ Editar</a>
                            <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este chollo?')">🗑️ Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="text-center mt-5 p-3 bg-light">
        <p>Julen © Chollos 2025</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
