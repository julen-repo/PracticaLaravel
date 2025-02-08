<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Chollo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1 class="text-center">✏️ Editar Chollo</h1>

        <div class="card shadow-lg p-4">
            <form action="{{ route('chollos.update', $chollo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Título -->
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="{{ $chollo->titulo }}" required>
                </div>

                <!-- Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="4" required>{{ $chollo->descripcion }}</textarea>
                </div>

                <!-- URL -->
                <div class="mb-3">
                    <label for="url" class="form-label">Enlace:</label>
                    <input type="url" id="url" name="url" class="form-control" value="{{ $chollo->url }}" required>
                </div>

                <!-- Categoría -->
                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Categoría:</label>
                    <select id="categoria_id" name="categoria_id" class="form-select" required>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $chollo->categoria_id == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Puntuación -->
                <div class="mb-3">
                    <label for="puntuacion" class="form-label">Puntuación:</label>
                    <input type="number" id="puntuacion" name="puntuacion" class="form-control" min="0" max="5" value="{{ $chollo->puntuacion }}" required>
                </div>

                <!-- Precio Original -->
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio Original (€):</label>
                    <input type="number" id="precio" name="precio" class="form-control" step="0.01" value="{{ $chollo->precio }}" required>
                </div>

                <!-- Precio con Descuento -->
                <div class="mb-3">
                    <label for="precio_descuento" class="form-label">Precio con Descuento (€):</label>
                    <input type="number" id="precio_descuento" name="precio_descuento" class="form-control" step="0.01" value="{{ $chollo->precio_descuento }}" required>
                </div>

                <!-- Disponibilidad -->
                <div class="mb-3">
                    <label for="disponible" class="form-label">Disponible:</label>
                    <select id="disponible" name="disponible" class="form-select" required>
                        <option value="1" {{ $chollo->disponible ? 'selected' : '' }}>Sí</option>
                        <option value="0" {{ !$chollo->disponible ? 'selected' : '' }}>No</option>
                    </select>
                </div>

                <!-- Botones -->
                <div class="d-flex justify-content-between">
                    <a href="{{ route('chollos.index') }}" class="btn btn-secondary">⬅️ Cancelar</a>
                    <button type="submit" class="btn btn-primary">💾 Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="text-center mt-5 p-3 bg-light">
        <p>Julen © Chollos 2025</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
