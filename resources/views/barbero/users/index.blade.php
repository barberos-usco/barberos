
@extends('layouts.app')



@section('content')
@extends('barbero.users.barra-lateral')
<body class="fondo">
<main id="main">

    <section id="about" class="about">
        <div class="caja">
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
                                    <td>{{ $user->role_id }}</td>
                                    <td>{{ $user->ubicacion }}</td>
                                    <td><a class="btn btn-success" href="{{ route('users.edit', $user->id) }}">Editar</a></td>
                                </tr>
                                
                            @endforeach
                        @endif
                        
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="cards">
      
        @if ($users)
          @foreach ($users as $user)
          
          @endforeach
        @endif 
      </div>    
        <div class="col-sm-4">
          <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150?random=4" />
            </div>
            <div class="card-inner">
              <div class="header">
                <h2>Title</h2>
                <h3>Sub-Head</h2>
            </div>
            <div class="content">
              <p>Content area</p>
            </div>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150?random=5" />
            </div>
            <div class="card-inner">
              <div class="header">
                <h2>Title</h2>
                <h3>Sub-Head</h2>
            </div>
            <div class="content">
              <p>Content area</p>
            </div>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150?random=6" />
            </div>
            <div class="card-inner">
              <div class="header">
                <h2>Title</h2>
                <h3>Sub-Head</h2>
            </div>
            <div class="content">
              <p>Content area</p>
            </div>
              </div>
          </div>
        </div><div class="col-sm-4">
          <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150?random=2" />
            </div>
            <div class="card-inner">
              <div class="header">
                <h2>Title</h2>
                <h3>Sub-Head</h2>
            </div>
            <div class="content">
              <p>Content area</p>
            </div>
              </div>
          </div>
        </div><div class="col-sm-4">
          <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150?random=3" />
            </div>
            <div class="card-inner">
              <div class="header">
                <h2>Title</h2>
                <h3>Sub-Head</h2>
            </div>
            <div class="content">
              <p>Content area</p>
            </div>
              </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="image">
              <img src="http://loremflickr.com/320/150" />
            </div>
            <div class="card-inner">
              <div class="header">
                <h2>Title</h2>
                <h3>Sub-Head</h2>
            </div>
            <div class="content">
              <p>Content area</p>
            </div>
              </div>
          </div>
        </div>
      
      </div>



      
      
    </section>
   
    
  
    </main><!-- End #main -->
  
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
    

  
            
</body>
@endsection