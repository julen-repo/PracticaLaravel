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
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('chollos.nuevos') }}">Nuevos</a></li>
            <li><a href="{{ route('chollos.destacados') }}">Destacados</a></li>
        </ul>
    </nav>
    
    <main>
        <h1>Listado de Chollos</h1>
        <table>
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

        {{ $chollos->links() }} <!-- Paginación -->
    </main>
</body>
</html>
