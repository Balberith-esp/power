<?php

namespace Database\Seeders;
use App\Models\Rol;

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $roles = array(
		array(
			'nombre' => 'admin',
        ),
        array(
			'nombre' => 'user',

        ),
    );
    public function run()
    {
        //

        foreach($this->roles as $rol){
            $nuevoRol = new Rol();
            $nuevoRol->rol = $rol['nombre'];
            $nuevoRol->save();
        }

    }
}
