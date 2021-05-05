<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class EjercicioController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

            // Creacion del entrenamiento
            $entrenamiendo = new Ejercicio();
            $entrenamiendo->nombre = $request->nombreIndicado;
            // 

// MODIFICAR LA ZONA PARA QUE SE COJA EN FUNCION DE LOS CHECKS
// QUITAR DESCRIPCION DE LA TABLA
// MODIFICAR EN EL PDF PARA QUE LOS RECURSOS SE CARGUEN POR LOS NUEVOS VALORES 
// GUARDAR LOS RESURSOS WEB EN LOCAL Y CARGAR LAS IMAGENES DESDE AHI

            // 
            $entrenamiendo->zona = $request->zonaIndicado;
            $entrenamiendo->descripcion = "-";
            $entrenamiendo->user_id =session()->get('user')->id;
            $entrenamiendo->save();

            $vals = $request->all();
            // Creacion del documento asociado
            $request->session()->put('entreamiento',$vals);

            $pdf = App::make('dompdf.wrapper');
            $pdf->loadView('pdf.ejercicio');
            $filename = time().'.'.session()->get('user')->id.'.pdf';

            // Guardamos el recurso

            $recurso = new Recurso();
            $recurso->path = '../resources/assets/pdf/'.$filename;
            $recurso->user_id = session()->get('user')->id;
            $recurso->commentable_type = 'ejercicio';
            $recurso->commentable_id = DB::table('ejercicios')->latest('created_at')->first()->id;
            $recurso->save();


            //Retornamos a la vista
            return $pdf->loadView('pdf.ejercicio')->save(public_path('../resources/assets/pdf/'.$filename))->stream($filename);


            // return redirect()->route('Perfil.show');
    }
    function guardarRegistro (Request $request){

        // Creacion del entrenamiento
            $entrenamiendo = new Ejercicio();
            $entrenamiendo->nombre = $request->nombre;
            $entrenamiendo->zona = $request->zona;
            $entrenamiendo->descripcion = "-";
            $entrenamiendo->user_id =session()->get('user')->id;
            $entrenamiendo->save();

            $fileName = time().'.'.$request->archivo->getClientOriginalExtension();

            $request->archivo->move(public_path('../resources/assets/pdf'), $fileName);

            $recurso = new Recurso();
            $recurso->path = '../resources/assets/pdf/'.$fileName;
            $recurso->user_id = 1;
            $recurso->commentable_type = 'ejercicio';
            $recurso->commentable_id = DB::table('ejercicios')->latest('created_at')->first()->id;
            $recurso->save();

            return redirect()->route('insercionDatos');
    }

}
