<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateRequest;
use App\User;

class ClienteUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct(){
        $this->middleware('auth', ['except' => ['index','show']]);
    }*/


    public function index()
    {
        $users=User::all();
        return view('cliente.users.index', compact('users'));
    }

    public function perfil($id)
    {
        $user=User::findOrFail($id);

        return view('cliente.users.perfil', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada=$request->all();

        if($archivo=$request->file('url_fotoPerfil')){

            $nombre=$archivo->getClientOriginalName();
            
            $archivo->move('images', $nombre);

            $foto=Foto::create(['ruta_foto'=>$nombre]);

            $entrada['url_fotoPerfil']=$foto->id;
        }
        if($archivo=$request->file('url_wallpa')){

            $nombre=$archivo->getClientOriginalName();
            
            $archivo->move('images', $nombre);

            $foto=Foto::create(['ruta_foto'=>$nombre]);

            $entrada['url_wallpa']=$foto->id;
        }
       

        $entrada['password']=bcrypt($request->password);

        User::create($entrada);

        return redirect('/cliente/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);

        return view('cliente.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:100'],
            'apellidos' => ['required', 'string', 'max:100'],
            
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
