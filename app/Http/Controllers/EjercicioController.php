<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Recurso;
use App\Models\otroRecurso;
use App\Models\User;
use DateTime;
use App\Models\Foro;

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

    public function index()
    {
        //
        $data = otroRecurso::where('tipo', '=', 'ejercicio')->orderByDesc('created_at')->paginate(3);

        return view('Entrenamientos.index',['ejercicios'=>$data]);

    }
    public function update(Ejercicio $item){

        
        $user = User::find(session()->get('user')->id);
        $ultimaModificacion = $user->updated_at;
        $ahora = date("Y-m-d H:i:s");
        $intervalo = $ultimaModificacion->diff($ahora);
        $hours = $intervalo->h;
        // dd($hours);
        if ($hours>6){
            $item->vecesRealizada += 1;
            $item->save();
            $user->puntos += 10;
            $user->updated_at = date("Y-m-d H:i:s");
            $user->save();
    
            $user->compruebaEstado();
        }else{
            return back()->with('warning','No intentes hacer trampas! :)');
        }
        
        return redirect()->route('Perfil.show')->with('success','Entrenamiento registrado con exito!, acabas de ganar 10 pts');
    }




    public function store(Request $request)
    {
        //

            // Creacion del entrenamiento
            $entrenamiendo = new Ejercicio();
            $entrenamiendo->nombre = $request->nombreIndicado;
            // 

            $entrenamiendo->zona = implode(" ",$request->zonaIndicado);
            $entrenamiendo->vecesRealizada = 0;
            $entrenamiendo->user_id =session()->get('user')->id;
            $entrenamiendo->save();

            // session()->get('user')->puntos += 10;
            $user = User::find(session()->get('user')->id);
            $user->puntos += 10;
            $user->save();
            $user->compruebaEstado();

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
            $entrenamiendo->zona = "";
            $entrenamiendo->vecesRealizada = 0;
            $entrenamiendo->user_id =session()->get('user')->id;
            $entrenamiendo->save();

            $fileName = time().'.'.$request->archivo->getClientOriginalExtension();

            $request->archivo->move(public_path('../resources/assets/pdf'), $fileName);
            $post = new Foro();

            $post->titulo = $request->nombre;
            $post->contenido = 'Nuevo ejercicio recomendado por el equipo de Power';
            $post->tipo = 0;
            $post->tieneRecurso =True;
            $post->user_id =session()->get('user')->id;
            $post->usuario = 'Administrador'   ;         
        
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
