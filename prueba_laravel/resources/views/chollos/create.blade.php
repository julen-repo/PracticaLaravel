<form action="{{ route('chollos.store') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="Título" required>
    <textarea name="descripcion" placeholder="Descripción" required></textarea>
    <select name="categoria_id" required>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
        @endforeach
    </select>
    <button type="submit">Guardar</button>
</form>
