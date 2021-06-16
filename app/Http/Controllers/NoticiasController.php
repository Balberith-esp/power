<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Noticia::orderBy('id', 'desc')->paginate(6);

        return view('Noticias.index',['noticias'=>$data]);

    }

    public function filtrar($filtro){
        switch ($filtro) {
            case 'fechaAsc':
                $data = Noticia::orderBy('created_at', 'asc')->paginate(6);
                return view('Noticias.index',['noticias'=>$data]);
                break;
            case 'fechaDesc':
                $data = Noticia::orderBy('created_at', 'desc')->paginate(6);
                return view('Noticias.index',['noticias'=>$data]);
                break;
            case 'categorias':
                $data = Noticia::orderBy('tipo','asc')->paginate(6);
                return view('Noticias.index',['noticias'=>$data]);
                break;
            case 'nutricion':
                $data = Noticia::where('tipo', '=', '1')->paginate(6);
                return view('Noticias.index',['noticias'=>$data]);
                break;
            case 'ejercicios':
                $data = Noticia::where('tipo', '=', '0')->paginate(6);
                return view('Noticias.index',['noticias'=>$data]);
                break;
                case 'todo':
                    $data = Noticia::paginate(6);
                return view('Noticias.index',['noticias'=>$data]);
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

        $noticia = new Noticia();
        $noticia->titulo = $request->tituloNoticia;
        $noticia->contenido = $request->textoNoticia;
        $noticia->tipo = $request->tipo;
        $noticia->user_id =session()->get('user')->id;
        $noticia->save();

        $data = Noticia::paginate(6);

        return redirect()->route('Noticias.index',['noticias'=>$data])->with('success','Noticia creada con exito');

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
