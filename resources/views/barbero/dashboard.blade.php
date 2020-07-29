<div class="carousel-item">
  <img src="..." alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
<h1 class="letras">Dashboard</h1>
<div class="row">
	<div class="caja col-8">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		  	@if ($portafolio)
		  		@foreach ($portafolio as $item)
		  			<li data-target="#carouselExampleIndicators" data-slide-to="{{$sumador}}" class="{{$activo}}"></li>
		  		@endforeach
		  	@endif
		  </ol>
		  <div class="carousel-inner">
			@if ($portafolio)
                @foreach ($portafolio as $item)
                	<div class="carousel-item {{$activo}}">
				      <img class="d-block w-100 portfolio-image" src="{{ url('/images/'.$item->ruta_foto) }}" alt="">
				      <div class="carousel-caption d-none d-md-block">
					    <p>{{$item->descripcion}}</p>
					  </div>
				    </div>
				    {{$activo = ''}}
                @endforeach
            @endif
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class="caja col-3">
		<h2 class="letras">Comentarios</h2>
        <div class="comentarios letras-negras sombreado">
        	<h5>Pepito Pérez</h5>
        	<p style="margin-left: 5%; text-align: justify; font-size: 13px;">
        		Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda.
        	</p>
        	<h5>Pepito Pérez</h5>
        	<p style="margin-left: 5%; text-align: justify; font-size: 13px;">
        		Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda.
        	</p>
        	<h5>Pepito Pérez</h5>
        	<p style="margin-left: 5%; text-align: justify; font-size: 13px;">
        		Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda. Servicio de mierda.
        	</p>
  		</div>
  		<br/>
  		<h2 class="letras">Valoración</h2>
		<p class="card-text">
			<div class="valoracion2">
	            <i class="fas fa-star checked"></i>
	            <i class="fas fa-star checked"></i>
	            <i class="fas fa-star checked"></i>
	            <i class="fas fa-star checked"></i>
	            <i class="fas fa-star "></i>
			</div>
			{{ Auth::user() }}
    	</p>
	</div>
</div>