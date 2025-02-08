<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h2>✏️ Editar Categoría</h2>
        
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nombre de la Categoría:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $categoria->name }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary mt-2">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
