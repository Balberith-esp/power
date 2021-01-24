<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Devuelve la vista con el formulario para la creacion del usuario
        return view('Perfil.add');
    }

    // Devuelve todos los usuarios
    public function todos()
    {
        $data =User::all();
        return $data->toJson();
    }

    // Devuelve un usuario buscando por el id
    public function fof($id)
    {
        $data =User::findOrFail($id);
        return view('Perfil.show',compact($data));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $nuevoUsuario = new User();
        $nuevoUsuario->nombre = $request->nombre;
        $nuevoUsuario->apellidos = $request->primerApellido." ".$request->segundoApellido;
        $nuevoUsuario->password = Crypt::encrypt($request->contraseña);
        $nuevoUsuario->pais = $request->pais;
        $nuevoUsuario->email = $request->email;
        $nuevoUsuario->provincia= $request->provincia;
        $nuevoUsuario->ciudad = $request->ciudad;
        // $nuevoUsuario->fotoPerfil = $request->fotoPerfil;
        $nuevoUsuario->activo = 1;
        $nuevoUsuario->save();
        $request->session()->put('user',$request->input('nombre'));
        return redirect('/');

        // return back()->withInput();




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
        //
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
        //
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
