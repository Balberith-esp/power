<?php

namespace App\Http\Controllers;

use App\Models\Nutricion;
use App\Models\Recurso;
use App\Models\Alimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class NutricionController extends Controller
{
    public function index()
    {
        //
        $data = otroRecuro::where('tipo', '=', 'nutricion')->paginate(3);

        return view('Nutricion.index',['Nutricion'=>$data]);

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
        $dieta->user_id =session()->get('user')->id;
        $dieta->save();


        $vals = $request->all();

        // Creacion del documento asociado
        $request->session()->put('nutricion',$vals);
        $dataAlimentos = Alimento::whereIn('tipoDieta', ['todas',$request->objetivoIndicado])->get();
        $request->session()->put('alimentacion',$dataAlimentos);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.nutricion')->setPaper('a4', 'landscape');
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
    function guardarNutricion (Request $request){

            $dieta = new Nutricion();
            $dieta->nombre = $request->nombre;

//     QUITAR EL CAMPO TIPO Y CLASIFICACION DE LA TABLA

// MODIFICAR EN EL PDF PARA QUE LOS RECURSOS DE EDAD, ALTURA Y SEXO LOS COJA DE LA USUARIO


            $dieta->tipo = $request->nombre;
            $dieta->clasificacion = "-";
            $dieta->user_id =1;
            $dieta->save();

            $fileName = time().'.'.$request->archivo->getClientOriginalExtension();

            $request->archivo->move(public_path('../resources/assets/pdf'), $fileName);

            $recurso = new Recurso();
            $recurso->path = '../resources/assets/pdf/'.$fileName;
            $recurso->user_id = 1;
            $recurso->commentable_type = 'nutricion';
            $recurso->commentable_id = DB::table('nutricion')->latest('created_at')->first()->id;
            $recurso->save();

            return redirect()->route('insercionDatos');
    }
}
