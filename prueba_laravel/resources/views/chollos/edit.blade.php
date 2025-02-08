<form action="{{ route('chollos.update', $chollo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- Título -->
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" value="{{ $chollo->titulo }}" required>

    <!-- Descripción -->
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required>{{ $chollo->descripcion }}</textarea>

    <!-- URL -->
    <label for="url">Enlace:</label>
    <input type="url" id="url" name="url" value="{{ $chollo->url }}" required>

    <!-- Categoría -->
    <label for="categoria_id">Categoría:</label>
    <select id="categoria_id" name="categoria_id" required>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ $chollo->categoria_id == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->name }}
            </option>
        @endforeach
    </select>

    <!-- Puntuación -->
    <label for="puntuacion">Puntuación:</label>
    <input type="number" id="puntuacion" name="puntuacion" min="0" max="5" value="{{ $chollo->puntuacion }}" required>

    <!-- Precio Original -->
    <label for="precio">Precio Original:</label>
    <input type="number" id="precio" name="precio" step="0.01" value="{{ $chollo->precio }}" required>

    <!-- Precio con Descuento -->
    <label for="precio_descuento">Precio con Descuento:</label>
    <input type="number" id="precio_descuento" name="precio_descuento" step="0.01" value="{{ $chollo->precio_descuento }}" required>

    <!-- Disponibilidad -->
    <label for="disponible">Disponible:</label>
    <select id="disponible" name="disponible" required>
        <option value="1" {{ $chollo->disponible ? 'selected' : '' }}>Sí</option>
        <option value="0" {{ !$chollo->disponible ? 'selected' : '' }}>No</option>
    </select>

    <!-- Botón de actualizar -->
    <button type="submit">Actualizar</button>
</form>
