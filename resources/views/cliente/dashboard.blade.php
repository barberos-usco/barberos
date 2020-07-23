<img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="1100" >
<div class="caja">
    <div class="container colum3">
    	<div class="container">
                <div class="section-title">
                    <h2>Información del Barbero</h2>
                </div>
                <div >
                    
                        @if ($users)
                            @foreach ($users as $user)
                                <tr>
                                    <div class="card" style="width: 15rem;">
                                      <img src="{{ asset('/images/profile-img.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="10%" >
                                        <div class="card-body">
                                            <h5 class="card-title"><b>{{ Auth::user()->name ." " . Auth::user()->apellidos  }}</b></h5>
                                            <p class="card-text"> {{ $user->id }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('barbero.users.perfil', $user->id) }}" class="btn color-botom-2" >Go somewhere</a>
                                        </div>
                                      </div>
                                </tr>

                            @endforeach
                        @endif

                    
                </div>
            </div>
            

    </div>
</div>