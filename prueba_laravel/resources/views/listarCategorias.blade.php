<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorías</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>📌 Listado de Categorías</h2>

        <!-- Botones de navegación -->
        <div class="mb-3">
            <a href="{{ route('chollos.index') }}" class="btn btn-secondary">⬅️ Volver a Chollos</a>
            <a href="{{ route('categorias.create') }}" class="btn btn-success">➕ Agregar Categoría</a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad de Chollos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->name }}</td>
                        <td>{{ $categoria->chollos_count }}</td>
                        <td>
                            <!-- Botón para editar -->
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">✏️ Editar</a>

                            <!-- Botón para eliminar con un formulario -->
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">
                                    🗑️ Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
