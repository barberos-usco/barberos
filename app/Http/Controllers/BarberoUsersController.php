<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Foto;
use App\Horario;

class BarberoUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('barbero.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barbero.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*User::create( $request->all());

        return redirect('/barbero/users');*/

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

        return redirect('/barbero/users');
        //return $request->all();
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

    public function especialidad($id)
    {
        $user=User::findOrFail($id);

        return view('barbero.users.editar_especialidad', compact('user'));
    }
    
    public function horario($id)
    {
        /*$user=User::findOrFail($id);

        return view('barbero.users.editar_especialidad', compact('user'));*/


    }

    public function servicio($id)
    {
        $user=User::findOrFail($id);

        return view('barbero.users.editar_servicio', compact('user'));
    }


    /**
     * Show thesds form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);

        return view('barbero.users.edit', compact('user'));
    }


    public function perfil($id)
    {
        $user=User::findOrFail($id);

        return view('barbero.users.perfil', compact('user'));
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
        $user=User::findOrFail($id);

        $entrada=$request->all();

        $user->update($entrada);



        return redirect('/barbero/users');

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
