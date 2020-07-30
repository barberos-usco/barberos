<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;
use App\Horario;

class HorarioController extends Controller
{

    public function edit($id_barbero, $editado = false){
        $horario = Horario::withoutTrashed()->where('id_barbero' , $id_barbero)->first();
    	return view("barbero.users.editar_especialidad",["horario"=>$horario, 'editado' => $editado]);
    }

    public function update(Request $request, $id){
    	$item = Horario::findOrFail($id);
    	$item->id_barbero = Auth::user()->id;
    	$item->lunes = $request->get('lunes');
    	$item->martes = $request->get('martes');
    	$item->miercoles = $request->get('miercoles');
    	$item->jueves = $request->get('jueves');
    	$item->viernes = $request->get('viernes');
    	$item->sabado = $request->get('sabado');
    	$item->domingo = $request->get('domingo');
    	$item->update();
        
	    //$portafolio = Portafolio::withoutTrashed()->where('barbero_id', Auth::user()->id)->get();
    	return self::edit(Auth::user()->id, true);
    }
}
