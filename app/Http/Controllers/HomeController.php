<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\EspecialidadBarbero;
use App\Hoario;
use App\Horario;
use App\Http\Requests\ComentarioFormRequest;
use App\Portafolio;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
                // Info para Dashboard del barbero
                $portafolio = Portafolio::withoutTrashed()
                    ->where(['barbero_id' => Auth::user()->id, 'activo' => '1'])
                    ->get();
                $comentarios = Comentario::with('cliente')->where('barbero_id', Auth::user()->id)
                ->orderBy('created_at', 'DESC')->limit(3)->get();
                    return view('home', ["portafolio"=>$portafolio, "comentarios" => $comentarios, "ocultarDashboard"=>$ocultarDashboard, "activo"=>'active', 'sumador'=> '0']);
            }else{
                // Ver barberos
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

        $portafolio = Portafolio::withoutTrashed()
            ->where(['barbero_id' => $user->id, 'activo' => 1])->get();

        $servicios = EspecialidadBarbero::with('especialidad')->where('barbero_id', $id)->orderBy('especialidad_id', 'ASC')->get();

        if($user->role_id === 1){
            $comentarios = Comentario::with('cliente')->where('barbero_id', $user->id)
                ->orderBy('created_at', 'DESC')->limit(5)->get();
            $horarios = Horario::withoutTrashed()->where('id_barbero' , $user->id)->first();
        }else{
            $comentarios = Comentario::with('barbero')->where('cliente_id', $user->id)
                ->orderBy('created_at', 'DESC')->limit(5)->get();
            $horarios = 1;
        }

        return view('perfil', compact('user'), ["portafolio"=>$portafolio, "activo"=>'active', 'sumador'=> '0', "comentarios" => $comentarios, "horarios" => $horarios, "servicios" => $servicios]);
    }

    public function guardarComentario(ComentarioFormRequest $request){
        $comentario = new Comentario;
        $comentario->cliente_id = Auth::user()->id;
        $comentario->barbero_id = $request->get('user_id');
        $comentario->comentario = $request->get('comentario');
        $comentario->save();

        return self::perfil($request->get('user_id'));
    }

    public function horario($id)
    {
        $user = User::findOrFail($id);
        $horario = Horario::where('barbero', $id)->get();

        return view('barbero.users.edit.especialidad', compact('user'));
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