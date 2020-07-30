<?php

namespace App\Http\Controllers;

use App\Portafolio;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortafolioController extends Controller
{
    public function index(){
    	$portafolio = Portafolio::withoutTrashed()->where('barbero_id', Auth::user()->id)->get();
    	return view('portafolio.listar', ["portafolio"=>$portafolio]);
    }
}
