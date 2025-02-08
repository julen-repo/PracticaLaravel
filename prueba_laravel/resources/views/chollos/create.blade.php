<form action="{{ route('chollos.store') }}" method="POST">
    @csrf

    <!-- Título -->
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" placeholder="Título del chollo" required>

    <!-- Descripción -->
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" placeholder="Descripción del chollo" required></textarea>

    <!-- URL -->
    <label for="url">Enlace:</label>
    <input type="url" id="url" name="url" placeholder="URL del chollo" required>

    <!-- Categoría -->
    <label for="categoria_id">Categoría:</label>
    <select id="categoria_id" name="categoria_id" required>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
        @endforeach
    </select>

    <!-- Puntuación -->
    <label for="puntuacion">Puntuación:</label>
    <input type="number" id="puntuacion" name="puntuacion" min="0" max="5" required>

    <!-- Precio Original -->
    <label for="precio">Precio Original:</label>
    <input type="number" id="precio" name="precio" step="0.01" placeholder="Precio original" required>

    <!-- Precio con Descuento -->
    <label for="precio_descuento">Precio con Descuento:</label>
    <input type="number" id="precio_descuento" name="precio_descuento" step="0.01" placeholder="Precio con descuento" required>

    <!-- Disponibilidad -->
    <label for="disponible">Disponible:</label>
    <select id="disponible" name="disponible" required>
        <option value="1">Sí</option>
        <option value="0">No</option>
    </select>

    <!-- Botón de enviar -->
    <button type="submit">Guardar</button>
</form>
