<table border="1px solid black">
    <tr>
        <th>Título</th>
        <th>Categoría</th>
        <th>Descripción</th>
        <th>URL</th>
        <th>Puntuacion</th>
        <th>Precio</th>
        <th>Precio descuento</th>
        <th>Disponible</th>
    </tr>
        <tr>
            <td>{{ $chollo->titulo }}</td>
            <td>{{ $chollo->categoria->name }}</td>
            <td>{{ $chollo->descripcion }}</td>
            <td>{{ $chollo->url }}</td>
            <td>{{ $chollo->puntuacion }}</td>
            <td>{{ $chollo->precio }}</td>
            <td>{{ $chollo->precio_descuento }}</td>
            <td>{{ $chollo->disponible }}</td>

        </tr>
</table>