<?php

namespace App\Http\Controllers;

use App\Especialidad;
use App\EspecialidadBarbero;
use App\Horario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class HorarioController extends Controller
{

    public function edit($id_barbero, $editado = false){
        $horario = Horario::withoutTrashed()->where('id_barbero' , $id_barbero)->first();
        $especialidades = Especialidad::all();
        $especialidadesBarbero = EspecialidadBarbero::where('barbero_id', $id_barbero)
            ->pluck('especialidad_id')->toArray();

    	return view(
            "barbero.users.editar_especialidad",
            [
                "horario"=>$horario,
                "especialidades" => $especialidades,
                "especialidadesBarbero" => $especialidadesBarbero,
                'editado' => $editado
            ]
        );
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

    public function updateEspecialidades(Request $request, $id){
        for($i = 1; $i <= 7; $i++){
            $check = 'check'.(string)$i;
            // Check
            if($request->$check){
                $especialidadBarbero = EspecialidadBarbero::where(
                    ['barbero_id' => (int)$id, 'especialidad_id' => (int)$request->$check])->first();
                if(empty($especialidadBarbero)){
                    $especialidadBarbero = new EspecialidadBarbero();
                    $especialidadBarbero->barbero_id = $id;
                    $especialidadBarbero->especialidad_id = (int)$request->$check;
                    $especialidadBarbero->save();
                }
            }// Un check
            else{
                $especialidadBarbero = EspecialidadBarbero::where(
                    ['barbero_id' => (int)$id, 'especialidad_id' => $i])->first();
                if(!empty($especialidadBarbero)){
                    $especialidadBarbero->especialidad_id = 0;
                    $especialidadBarbero->save();
                }
            }
        }
        // Elimina especialidades en 0
        EspecialidadBarbero::where('especialidad_id', 0)->delete();

        return self::edit(Auth::user()->id, false);
    }
}
