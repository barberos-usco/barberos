<?php

namespace App\Http\Controllers;

use App\Portafolio;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use App\Foto;
use Hash;
use Validator;



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
                $portafolio = Portafolio::withoutTrashed()
                    ->where(['barbero_id' => Auth::user()->id, 'activo' => '1'])
                    ->get();
                    return view('home', ["portafolio"=>$portafolio, "ocultarDashboard"=>$ocultarDashboard, "activo"=>'active', 'sumador'=> '0']);
            }else{
                $users=User::where('name', 'Like', '%'.$query.'%')->orWhere('apellidos', 'Like', '%'.$query.'%')
                    ->orWhere(DB::raw("CONCAT(name, ' ', apellidos)"), 'LIKE', "%".$query."%")
                    
                    
                    ->get()->whereNotIn('id', [Auth::user()->id])->where('role_id', 1);
                    return view('home', ["users"=>$users,"ocultarDashboard"=>$ocultarDashboard, "buscar"=>$query]);
            }
        }// Clientes
        else if(Auth::user()->role_id === 2){
            $users=User::where('name', 'Like', '%'.$query.'%')->orWhere('apellidos', 'Like', '%'.$query.'%')
                ->orWhere(DB::raw("CONCAT(name, ' ', apellidos)"), 'LIKE', "%".$query."%")
                ->get()->where('role_id', 1);
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
        $portafolio = Portafolio::withoutTrashed()->where('barbero_id', $user->id)->get();
        

        return view('perfil', compact('user'), ["portafolio"=>$portafolio, "activo"=>'active', 'sumador'=> '0']);
    }

    public function password()
    {
        return view('barbero.users.password');
    }

    public function updatePassword(Request $request)
    {
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('/password')->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect('/home')->with('status', 'Password cambiado con éxito');
            }
            else
            {
                return redirect('/password')->with('message', 'Credenciales incorrectas');
            }
        }
    }
}