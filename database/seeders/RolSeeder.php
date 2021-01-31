<?php

namespace Database\Seeders;
use App\Models\Role;

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
            $nuevoRol = new Role();
            $nuevoRol->nombre = $rol['nombre'];
            $nuevoRol->save();
        }

    }
}
