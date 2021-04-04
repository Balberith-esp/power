<?php

namespace App\Http\Controllers;

use App\Models\Nutricion;
use App\Models\Recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class NutricionController extends Controller
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
        $dieta = new Nutricion();
        $dieta->nombre = $request->nombreIndicado;
        $dieta->tipo = $request->nombreIndicado;
        $dieta->clasificacion = "-";
        $dieta->user_id =session()->get('user')->id;
        $dieta->save();


        $vals = $request->all();

        // Creacion del documento asociado
        $request->session()->put('nutricion',$vals);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.nutricion');
        $filename = time().'.'.session()->get('user')->id.'.pdf';

        // Guardamos el recurso

        $recurso = new Recurso();
        $recurso->path = '../resources/assets/pdf/'.$filename;
        $recurso->user_id = session()->get('user')->id;
        $recurso->commentable_type = 'nutricion';
        $recurso->commentable_id = DB::table('nutricion')->latest('created_at')->first()->id;
        $recurso->save();


        //Retornamos a la vista
        return $pdf->loadView('pdf.nutricion')->save(public_path('../resources/assets/pdf/'.$filename))->stream($filename);
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
