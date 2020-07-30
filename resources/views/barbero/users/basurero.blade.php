<div class="caja-especialidad container sombreado">
    <div class="card-body ">
        {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@update', $user->id], 'files'=>true], ['class'=>'form-inline']) !!}
            <div class="row">
                <div class="columna letras" >
                    <img src="{{ asset('/images/especialidad-izq.png') }}" class="img-fluid  " alt="Responsive image" width="100%" >
                </div>
                <div class="columna letras" >
                    <div class="section-title">
                        <h2>Editar Especialidades</h2>
                    </div>
                    <div>
                       {!! Form::checkbox('Peluqueria', 'Peluqueria') !!} Peluqueria
                    </div>
                    <div>
                       {!! Form::checkbox('Rasurado', 'Rasurado') !!} Rasurado
                    </div>
                    <div>
                       {!! Form::checkbox('Masajes y faciales', 'Masajes y faciales') !!} Masajes y faciales
                    </div>
                    <div>
                       {!! Form::checkbox('Cejas', 'Cejas') !!} Cejas
                    </div>
                    <div>
                       {!! Form::checkbox('Reporalizacion', 'Reporalizacion') !!} Reporalización
                    </div>
                    <div>
                       {!! Form::checkbox('Tratamiento Capilar', 'Tratamiento Capilar') !!} Tratamiento Capilar
                    </div>
                    <div>
                       {!! Form::checkbox('Depilación con Cera', 'Depilación con Cera') !!} Depilación con Cera
                    </div><br><br>
                    {!! Form::submit('Guardar', ['class'=>'btn color-botom sombreado centrado']) !!}
                    {!! Form::reset('Borrar', ['class'=>'btn color-botom-borrar sombreado']) !!}
                </div>
                <div class="columna letras" >
                    <img src="{{ asset('/images/especialidad-dere.png') }}" class="img-fluid  " alt="Responsive image" width="100%" >
                </div>