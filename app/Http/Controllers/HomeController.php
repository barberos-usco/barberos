<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Foto;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($esBarbero = false)
    {
        // Barberos
        if(Auth::user()->role_id === 1){
            $users=User::all();
            return view('home', compact('users'));
        }else if(Auth::user()->role_id === 1 && $esBarbero === true){
            $users=User::where('role_id', 1)->whereNotIn('id', [Auth::user()->id])->get();
            return view('home', compact( 'users'));
        }// Clientes
        else if(Auth::user()->role_id === 2){
            $users=User::where('role_id', 1)->get();
            return view('home', compact( 'users'));
        }else{
            return 'Error 404';
        }
    }

    public function listarBarberos(){
        return self::index(true);
    }
}
