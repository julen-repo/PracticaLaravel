<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('chollos.nuevos') }}">Nuevos</a>
        <a href="{{ route('chollos.destacados') }}">Destacados</a>
        <a href="{{ route('chollos.crear') }}">Crear</a>
        <a href="{{ route('categorias.index') }}">Categorías</a>
    </nav>

    <main>
        <h1>Listado de Chollos</h1>
        <table border="1px solid black">
            <tr>
                <th>Título</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
            @foreach($chollos as $chollo)
            <tr>
                <td><a href="{{ route('chollos.show', $chollo->id) }}">{{ $chollo->titulo }}</a></td>
                <td>{{ $chollo->categoria->name }}</td>
                <td>
                    <a href="{{ route('chollos.edit', $chollo->id) }}">✏️ Editar</a>
                    <form action="{{ route('chollos.destroy', $chollo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">🗑️ Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        @if(session("success"))
            <div>
                {{session("success")}}
            </div>
        @endif

        {{ $chollos->links() }} <!-- Paginación -->
    </main>
</body>

</html>