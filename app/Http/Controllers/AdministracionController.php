<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Alimento;
use App\Models\Nutricion;
use App\Models\user;
use App\Models\Role;
use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Administracion.index');

    }
    public function insercionDatos()
    {
        //
        $dataEjercicios = Ejercicio::all();
        $dataNutricion = Nutricion::all();
        $dataAlimentos = Alimento::all();
        $dataUsers = User::all();
        $dataRoles = Role::all();
        return view('Administracion.insercionDatos',['ejercicios'=>$dataEjercicios,'nutriciones'=>$dataNutricion,
                                                         'alimentos'=>$dataAlimentos,'usuarios'=>$dataUsers,
                                                         'roles'=>$dataRoles]);

    }
    public function controlUsuarios()
    {
        $dataRoles = Role::all();
        $data = User::all();
        return view('Administracion.controlUsuarios', ['usuarios'=>$data,'roles'=>$dataRoles]);

    }

    public function actualizaUsuarios(){

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
