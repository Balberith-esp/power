<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\role_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use DateTime;

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
        $request->validate([
            'fotoPerfil' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            ]);
            // return $request;
            
            if($request->contraseña == $request->repContraseña and $request->exist == "on" or  $request->exist == Null){
                
            $fileName = time().'.'.$request->fotoPerfil->getClientOriginalExtension();

            $request->fotoPerfil->move(public_path('../resources/assets/img/fotosPerfil'), $fileName);

            $nuevoUsuario = new User();
            $nuevoUsuario->nombre = $request->nombre;
            $nuevoUsuario->apellidos = $request->primerApellido." ".$request->segundoApellido;
            $nuevoUsuario->password = Crypt::encrypt($request->contraseña);
            $nuevoUsuario->pais = $request->pais;
            
            $nuevoUsuario->edad = $request->edad;
            $nuevoUsuario->sexo = $request->sexo;
            $nuevoUsuario->altura = $request->Altura;
            $nuevoUsuario->peso = $request->peso;

            $nuevoUsuario->puntos = 100;
            $nuevoUsuario->nivel = 'Novato';
            
            $nuevoUsuario->email = $request->email;
            $nuevoUsuario->provincia= $request->provincia;
            $nuevoUsuario->ciudad = $request->ciudad;
            $nuevoUsuario->fotoPerfil = $fileName;
            $nuevoUsuario->activo = 1;
            $nuevoUsuario->save();
            if ($request->role){
                $nuevoRoleUser = new role_user();
                $nuevoRoleUser->role_id = $request->role;
                $nuevoRoleUser->user_id = $nuevoUsuario->id;
                $nuevoRoleUser->save();
            }else{
                $nuevoUsuario->assignRole('user');
            }

            if(session()->get('user') != null){
                return redirect('/UserControl');
            }else{

                $request->session()->put('user',$nuevoUsuario);
                return redirect('/enviaEmail/registro');
            }
        }else{
            return Redirect::back()->withErrors(['Algún dato introducido no es correcto, intentelo de nuevo', 'The Message']);
        }

    }

    public function calculaEdad($fecha){
        $fecha_nacimiento = new DateTime($fecha);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        return $edad;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $users = User::all();

        $user = $users->find(session()->get('user')->id);

        session()->put('user',$user);

        return view('Perfil.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request )
    {
        //
        $user = User::find(session()->get('user')->id);
        $user->peso = $request->peso;
        $user->altura = $request->altura;

        if ($request->archivo){

            $fileName = time().'.'.$request->archivo->getClientOriginalExtension();
            $request->archivo->move(public_path('../resources/assets/img/fotosPerfil'), $fileName);
            $user->fotoPerfil = $fileName;

        }

        $user->save();


        return redirect()->route('Perfil.show');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'fotoPerfil' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
        ]);

        $fileName = time().'.'.$request->fotoPerfil->getClientOriginalExtension();

        $request->fotoPerfil->move(public_path('../resources/assets/img/fotosPerfil'), $fileName);

        $usuarioEditado = User::where('email', "=", $request->email)->first();
        if($usuarioEditado != null){
            if($request->active== "on"){
                $activado = 1;
            }else{
                $activado = 0;
            }
            $usuarioEditado->update([
                "nombre" => $request->nombre,
                "apellidos" => $request->primerApellido." ".$request->segundoApellido,
                "password" => Crypt::encrypt($request->contraseña),
                "pais" => $request->pais,
                "peso" => $request->peso,
                "edad" => $request->edad,
                "altura" => $request->Altura,
                "email" => $request->email,
                "provincia" => $request->provincia,
                "ciudad" => $request->ciudad,
                "fotoPerfil" => $fileName,
                "activo" => $activado
            ]);
            $nuevoRoleUser = new role_user();
            $nuevoRoleUser->role_id = $request->role;
            $nuevoRoleUser->user_id = $usuarioEditado->id;
            $nuevoRoleUser->save();

            return redirect('/UserControl');
        }else{
            return redirect('/UserControl');
        }



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
