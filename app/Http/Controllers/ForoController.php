<?php

namespace App\Http\Controllers;
use App\Models\Foro;
use App\Models\Recurso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $data = Foro::paginate(6);
        $dataUsuarios = User::all();

        return view('Foro.index',['post'=>$data,'dataUsuarios'=>$dataUsuarios]);

    }

    public function filtrar($filtro){
        switch ($filtro) {
            case 'fechaAsc':
                $data = Foro::orderBy('created_at', 'asc')->paginate(6);
                return view('Foro.index',['post'=>$data]);
                break;
            case 'fechaDesc':
                $data = Foro::orderBy('created_at', 'desc')->paginate(6);
                return view('Foro.index',['post'=>$data]);
                break;
            case 'categorias':
                $data = Foro::orderBy('tipo','asc')->paginate(6);
                return view('Foro.index',['post'=>$data]);
                break;
            case 'nutricion':
                $data = Foro::where('tipo', '=', '1')->paginate(6);
                return view('Foro.index',['post'=>$data]);
                break;
            case 'ejercicios':
                $data = Foro::where('tipo', '=', '2')->paginate(6);
                return view('Foro.index',['post'=>$data]);
                break;
            case 'todo':
                $data = Foro::paginate(6);
                return view('Foro.index',['post'=>$data]);
                break;
        };
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
        $post = new Foro();

        $post->titulo = $request->tituloPost;
        $post->contenido = $request->textoPost;
        $post->tipo = $request->tipo;
        $post->user_id =session()->get('user')->id;
        $post->usuario = session()->get('user')->nombre.' '.session()->get('user')->apellidos;
        $user = User::find(session()->get('user')->id);
        
        if($request->archivo){
            $post->tieneRecurso = True;
            $user->puntos += 10;
        }else{
            $user->puntos += 5;
            $post->tieneRecurso = False;
        }
        
        $post->save();
        $user->save();
        if($request->archivo){
            $fileName = time().'.'.$request->archivo->getClientOriginalExtension();
            
            $request->archivo->move(public_path('../resources/assets/pdf'), $fileName);
            
            $recurso = new Recurso();
            $recurso->path = '../resources/assets/pdf/'.$fileName;
            $recurso->user_id = session()->get('user')->id;
            $recurso->commentable_type = 'post';
            $recurso->commentable_id = DB::table('foro')->latest('created_at')->first()->id;
            $recurso->save();
        }
        
        $data = Foro::paginate(6);
        
        $user->compruebaEstado();
        return redirect()->route('Foro.index',['post'=>$data])->with('success','Nuevo post creado!, acabas de ganar pts, sigue colaborando en la web para subir de nivel mas rapido. (^^)/');;
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
