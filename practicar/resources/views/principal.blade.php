<table>
    <tr>
        <th>Nombre</th>
        <th>Color</th>
        <th>Descripcion</th>
        <th>Conductor</th>
    </tr>

@foreach ($coches as $coche)
    <tr>
        <td>{{$coche->nombre}}</td>
        <td>{{$coche->color}}</td>
        <td>{{$coche->descripcion}}</td>
        <td>{{$coche->conductor->nombre}}</td>
    </tr>
@endforeach
</table>