	<div class="carousel-item">
	<img src="..." alt="...">
	<div class="carousel-caption d-none d-md-block">
		<h5>...</h5>
		<p>...</p>
	</div>
	</div>
	<div class="card-footer-home">
		<h1 class="letras text-center"><b>Dashboard</b></h1>
	</div>	
	<div class="row">
		<div class="caja col-6">
			@if (count($portafolio) > 0)
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
			@else
				<h3 class="letras">No hay imágenes en el portafolio.</h3><br/>
			@endif
			
		</div>
		<div class="caja col-5">
			<h2 class="letras">Comentarios</h2>
			@if(count($comentarios) > 0)
				@foreach($comentarios as $comentario)
					<div class="comentarios letras-negras sombreado" style="overflow-wrap: break-word; word-wrap: break-word; width: 100%;">
					<br><h5><b>{{ $comentario->cliente->name." ".$comentario->cliente->apellidos }}:</b></h5>
					<p style="font-size: 13px;">
						{{ $comentario->comentario }}
					</p>
					</div>
				@endforeach
			@else
				<h5 class="letras">No hay comentarios.</h5>
			@endif
			<br/>
			<h2 class="letras">Valoración</h2>
			<p class="card-text">
				<div class="valoracion2 sombreado">
					<i class="fas fa-star checked"></i>
					<i class="fas fa-star checked"></i>
					<i class="fas fa-star checked"></i>
					<i class="fas fa-star checked"></i>
					<i class="fas fa-star "></i>
				</div>
			</p>
			<div class="card-footer-home">
				<a href="{{ route('portafolio') }}" class="btn color-botom-home text-center" >Personalizar portafolio</a>
			</div>
		</div>
		
	</div>