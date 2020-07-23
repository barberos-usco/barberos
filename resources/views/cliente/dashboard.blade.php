<h1>Dashboard de clientes!!!</h1>
<img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="1100" >
<div class="caja">
    <div class="container colum3">
    	<div class="container">
                <div class="section-title">
                    <h2>Información del Barbero</h2>
                </div>
                <div >
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
                                    <td>{{ $user->role["nombre_rol"] }}</td>
                                    <td>{{ $user->ubicacion }}</td>
                                    <td><a class="btn btn-success" href="{{ route('barbero.users.edit', $user->id) }}">Editar</a></td>
                                </tr>

                            @endforeach
                        @endif

                    </table>
                </div>
            </div>
        <!-- Colocar tarjetas acá -->

    </div>
</div>