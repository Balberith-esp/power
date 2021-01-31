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
            'user_id' => 1,
            'role_id' => 1,
        ),
		array(
            'user_id' => 2,
            'role_id' => 2,
        ),
    );
    public function run()
    {
        //
        foreach($this->usuarioRoles as $usuarioRol){
            $nuevoUsuarioRol = new UsuariosRol();
            $nuevoUsuarioRol->user_id = $usuarioRol['user_id'];
            $nuevoUsuarioRol->role_id = $usuarioRol['role_id'];
            $nuevoUsuarioRol->save();
        }
    }
}
