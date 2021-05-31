<?php

namespace App\Http\Controllers;
use App\Models\otroRecurso;

use Illuminate\Http\Request;

class otroRecursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $otroRecurso = new otroRecurso();
            $otroRecurso->titulo = $request->titulo;
            $otroRecurso->lineas = $request->lineas;
            $otroRecurso->recurso = $request->recurso;
            $otroRecurso->tipo = $request->tipoRecurso;
            $fileName = time().'.'.$request->pathImagen->getClientOriginalExtension();

            $request->pathImagen->move(public_path('../resources/assets/img'), $fileName);
            $otroRecurso->pathImagen = $fileName;
            
            $otroRecurso->save();
            return redirect()->route('insercionDatos');
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
