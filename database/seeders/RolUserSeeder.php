<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsuariosRol;
class RolUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $usuarioRoles = array(
		array(
            'usuario_id' => 1,
            'rol_id' => 1,
        ),
		array(
            'usuario_id' => 2,
            'rol_id' => 2,
        ),
    );
    public function run()
    {
        //
        foreach($this->usuarioRoles as $usuarioRol){
            $nuevoUsuarioRol = new UsuariosRol();
            $nuevoUsuarioRol->usuario_id = $usuarioRol['usuario_id'];
            $nuevoUsuarioRol->rol_id = $usuarioRol['rol_id'];
            $nuevoUsuarioRol->save();
        }
    }
}
