@section('content')
    <h1>Información del Barbero</h1>

    <table width="500" border="1">
        <tr>
            <td scope="col">Id</td>
            <td scope="col">Nombre</td>
            <td scope="col">Apellidos</td>
            <td scope="col">Genero</td>
            <td scope="col">Fecha de Nacimiento</td>
            <td scope="col">Rol</td>
            <td scope="col">Ubicación</td>
            <td scope="col">Acción</td>
        </tr>
        @if ($users)
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->apellidos }}</td>
                    <td>{{ $user->genero }}</td>
                    <td>{{ $user->fecha_nacimiento }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->ubicacion }}</td>
                    <td><a class="btn btn-success" href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                </tr>
                
            @endforeach
        @endif
        
    </table>

@endsection