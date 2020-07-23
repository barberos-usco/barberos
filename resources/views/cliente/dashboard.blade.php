<img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="1100" >
<div class="caja">
    
        <div class="row">
            
            
                @if ($users)
                    @foreach ($users as $user)
                    
                        <div class="card-home column4" style="">
                            <img src="{{ asset('/images/profile-img.jpg') }}" class="img-fluid  radio_logo sombreado tamaño-home "  >
                            <div class="card-body">
                                <h5 class="card-title text-center" style="color: #352c23;"><b>{{ $user->name ." " . $user->apellidos  }}</b></h5>
                                <div class="border-top my-3"></div>
                                <p class="card-text"> <div class="valoracion2">
                                    
                                    <!-- La idea es porner un foreach para que se haga las estrellas que tenga en la valoracion ;) -->

                                    <!-- Estrella 1 -->
                                    <button>
                                        <i class="fas fa-star "></i>
                                    </button>
                    
                                    <!-- Estrella 2 -->
                                    <button>
                                        <i class="fas fa-star"></i>
                                    </button>
                    
                                    <!-- Estrella 3 -->
                                    <button>
                                        <i class="fas fa-star "></i>
                                    </button>
                    
                                    <!-- Estrella 4 -->
                                    <button>
                                        <i class="fas fa-star "></i>
                                    </button>
                    
                                    <!-- Estrella 5 -->
                                    <button>
                                        <i class="fas fa-star "></i>
                                    </button>
                                    
                                    
                                </div></p>
                            </div>
                            <div class="card-footer-home">
                                <a href="{{ route('barbero.users.perfil', $user->id) }}" class="btn color-botom-home text-center" >Perfil</a>
                            </div>
                        </div>
                    @endforeach
                @endif
                
        </div>
    
</div>
