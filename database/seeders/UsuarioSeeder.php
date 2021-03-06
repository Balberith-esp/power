<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $usuarios = array(
		array(
			'nombre' => 'Jesus',
			'apellidos' => 'Cuevas Gonzalez',
            'edad' => 25,
            'peso' => 80,
            'altura' => 180,
            'sexo' => 'hombre',
            'nivel' => 'novato',
            'puntos' => 100, 
			'email' => 'jesuscarandia@gmail.com',
			'password' => '1234',
			'pais' => 'España',
			'provincia' => 'Cantabria',
            'ciudad' => 'Torrelavega',
            'activo'=> 1,
            "fotoPerfil" => 'fotoJesus.jpg'
        ),
        array(
			'nombre' => 'Pedro',
			'apellidos' => 'Usuario',
            'edad' => 45,
            'peso' => 72,
            'altura' => 171,
            'sexo' => 'hombre',
            'nivel' => 'Avanzado',
            'puntos' => 420,
			'email' => 'pedro@power.com',
			'password' => '1234',
			'pais' => 'España',
			'provincia' => 'Cantabria',
            'ciudad' => 'Torrelavega',
            'activo'=> 1,
            "fotoPerfil" => 'fotoPedro.jpg'
        ),
    );
    public function run()
    {
        //
        foreach ($this->usuarios as $user){
            $usuario = new User();
            $usuario->nombre = $user['nombre'];
            $usuario->apellidos = $user['apellidos'];
            $usuario->edad = $user['edad'];
            $usuario->sexo = $user['sexo'];
            $usuario->nivel = $user['nivel'];
            $usuario->altura = $user['altura'];
            $usuario->peso = $user['peso'];
            $usuario->puntos = $user['puntos'];
            $usuario->email = $user['email'];
            $usuario->password = Crypt::encrypt($user['password']);
            $usuario->pais = $user['pais'];
            $usuario->provincia = $user['provincia'];
            $usuario->ciudad = $user['ciudad'];
            $usuario->activo = $user['activo'];
            $usuario->fotoPerfil = $user['fotoPerfil'];
            $usuario->save();
        }

    }
}
