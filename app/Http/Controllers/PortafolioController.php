<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortafolioFormRequest;
use App\Portafolio;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class PortafolioController extends Controller
{
    public function index(){
    	$portafolio = Portafolio::withoutTrashed()->where('barbero_id', Auth::user()->id)->get();
    	return view('portafolio.listar', ["portafolio"=>$portafolio]);
    }

    public function create(){
    	return view('portafolio.create');
    }

    public function store(PortafolioFormRequest $request){
    	$item = new Portafolio;
    	$item->barbero_id = Auth::user()->id;
    	$item->descripcion = $request->get('descripcion');
    	$item->activo = $request->get('estado');
    	if($archivo = $request->file('imagen')){
        	$nombre = $archivo->getClientOriginalName();
        	$archivo->move('images', $nombre);
        	$item->ruta_foto = $nombre;
    	}
	    $item->save();

    	$portafolio = Portafolio::withoutTrashed()->where('barbero_id', Auth::user()->id)->get();
    	return view('portafolio.listar', ["portafolio"=>$portafolio]);
    }

    public function edit($id){
    	$portafolio = Portafolio::findOrFail($id);
    	return view("portafolio.edit",["portafolio"=>$portafolio]);
    }

    public function update(PortafolioFormRequest $request, $id){
    	$item = Portafolio::findOrFail($id);
    	$item->descripcion = $request->get('descripcion');
    	$item->activo = $request->get('estado');
    	if($archivo = $request->file('imagen')){
        	$nombre = $archivo->getClientOriginalName();
        	$archivo->move('images', $nombre);
        	$item->ruta_foto = $nombre;
    	}
	    $item->update();

	    $portafolio = Portafolio::withoutTrashed()->where('barbero_id', Auth::user()->id)->get();
    	return view('portafolio.listar', ["portafolio"=>$portafolio]);
    }

    public function destroy($id){
    	$item = Portafolio::findOrFail($id);
    	$item->delete();

    	$portafolio = Portafolio::withoutTrashed()->where('barbero_id', Auth::user()->id)->get();
    	return view('portafolio.listar', ["portafolio"=>$portafolio]);
    }
}
