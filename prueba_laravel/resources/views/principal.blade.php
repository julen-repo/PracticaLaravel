<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chollos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center"> Chollos </h1>

        <!-- Mensajes de éxito o error -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Navegación -->
        <div class="mb-3">
            <a href="{{ route('home') }}" class="btn btn-secondary">🏠 Inicio</a>
            <a href="{{ route('chollos.nuevos') }}" class="btn btn-info">🆕 Nuevos</a>
            <a href="{{ route('chollos.destacados') }}" class="btn btn-warning">⭐ Destacados</a>
            <a href="{{ route('chollos.create') }}" class="btn btn-success">➕ Crear Chollo</a>
            <a href="{{ route('categorias.index') }}" class="btn btn-primary">📂 Categorías</a>
        </div>

        <!-- Tabla de Chollos -->
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chollos as $chollo)
                    <tr>
                        <td><a href="{{ route('chollos.show', $chollo->id) }}">{{ $chollo->titulo }}</a></td>
                        <td>{{ $chollo->categoria->name }}</td>
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

        <!-- Paginación -->
        <div class="d-flex justify-content-center">
            {{ $chollos->links() }}
        </div>
    </div>

    <footer class="text-center mt-5 p-3 bg-light">
        <p>Julen © Chollos 2025</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
