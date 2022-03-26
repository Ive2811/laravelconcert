<h1>Listado de cantantes.</h1>
<a href="{{ url('/singer/create') }}"> Registro de nuevo cantante.</a>
<table>
    <thread>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nombre artístico</th> 
            <th>Edad</th>
            <th>Genero de musica</th>
            <th></th>
            <th></th>
</tr>
    </thread>
    <tbody>
        @foreach ($singers as $singer)
        <<tr>
            <td>{{ $singer->id }}</td>
            <td>{{ $singer->name }}</td>
            <td>{{ $singer->lastname }}</td>
            <td>{{ $singer->artisticname }}</td>
            <td>{{ $singer->age }}</td>
            <td>{{ $singer->musicgenre }}</td>

            <td>
                <a href="{{ url('/singer/' .$singer->id. '/edit') }}">Editar</a>
</td>
<td>
    <form action="{{ url('/singer/' .$singer->id) }}" method="POST">
        @csrf 
        {{ method_field('DELETE') }}
        <input type="submit" value="Eliminar"
         onclick="return confirm('Desea eliminar el registro?')"
         >
</form>
</td>
</tr>
        @endforeach
</tbody>
</table>