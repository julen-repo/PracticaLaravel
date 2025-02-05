<form action="{{ route('chollos.update', $chollo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $chollo->titulo }}" required>
    <textarea name="descripcion" required>{{ $chollo->descripcion }}</textarea>
    <select name="categoria_id" required>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ $chollo->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->name }}</option>
        @endforeach
    </select>
    <button type="submit">Actualizar</button>
</form>
