<?php

namespace App\Http\Controllers;

use App\Models\Nutricion;
use App\Models\Recurso;
use App\Models\Alimento;
use App\Models\Foro;
use App\Models\otroRecurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class NutricionController extends Controller
{
    public function index()
    {
        //
        $data = otroRecurso::where('tipo', '=', 'nutricion')->orderByDesc('created_at')->paginate(3);

        return view('Nutricion.index',['nutricion'=>$data]);

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

            $dieta->user_id =1;
            $dieta->save();

            $fileName = time().'.'.$request->archivo->getClientOriginalExtension();

            $request->archivo->move(public_path('../resources/assets/pdf'), $fileName);
            $post = new Foro();

            $post->titulo = $request->nombre;
            $post->contenido = 'Nueva dieta recomendada por el equipo de Powe';
            $post->tipo = 1;
            $post->user_id =session()->get('user')->id;
            $post->usuario = 'Administrador'; 
            $post->tieneRecurso = True;         
        
            $post->save();

            $recurso = new Recurso();
            $recurso->path = '../resources/assets/pdf/'.$fileName;
            $recurso->user_id = 1;
            $recurso->commentable_type = 'post';
            $recurso->commentable_id = DB::table('foro')->latest('created_at')->first()->id;
            $recurso->save();



            return redirect()->route('insercionDatos');
    }
}
