<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function index(Request $request, $ocultarDashboard = false)
    {
        $query = trim($request->get('buscar'));
        // Barberos
        if(Auth::user()->role_id === 1){
            if($ocultarDashboard === false){
                // Hacer consulta para traer toda la info del dashboard del barbero
                $users=User::find(Auth::user()->id);
            }else{
                $users=User::where('role_id', 1)
                    ->where('name', 'Like', '%'.$query.'%')->orWhere('apellidos', 'Like', '%'.$query.'%')
                    ->orWhere(DB::raw("CONCAT(name, ' ', apellidos)"), 'LIKE', "%".$query."%")
                    ->get()->whereNotIn('id',[Auth::user()->id]);
            
                    
            }
            return view('home', ["users"=>$users,"ocultarDashboard"=>$ocultarDashboard, "buscar"=>$query]);
        }// Clientes
        else if(Auth::user()->role_id === 2){
            $users=User::where('role_id', 1)
                ->where('name', 'Like', '%'.$query.'%')->orWhere('apellidos', 'Like', '%'.$query.'%')
                ->orWhere(DB::raw("CONCAT(name, ' ', apellidos)"), 'LIKE', "%".$query."%")
                ->get();
            return view('home', ["users"=>$users,"buscar"=>$query]);
        }else{
            return 'Error 404';
        }
    }

    public function listarBarberos(Request $request)
    {
        return self::index($request, true);
    }

    public function perfil($id)
    {
        $user=User::findOrFail($id);
        return view('perfil', compact('user'));
    }
}
