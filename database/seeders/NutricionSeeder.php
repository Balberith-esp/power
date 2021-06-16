<?php

namespace Database\Seeders;

use App\Models\Nutricion;
use Illuminate\Database\Seeder;

class NutricionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $nutricion = array(
		array(
            'nombre' => 'Dieta volumen',
			'user_id' => '1',
        ),
        array(
            'nombre' => 'Dieta definicion',
			'user_id' => '1',
        ),
        
        array(
            'nombre' => 'Dieta semanal',
			'user_id' => '2',
        ),
        array(
            'nombre' => 'Dieta verano',
			'user_id' => '2',
        ),
        array(
            'nombre' => 'Dieta alto rendimiento',
			'user_id' => '2',
        ),
    );
    public function run()
    {
        //
        foreach ($this->nutricion as $nut){
            $nutricion = new Nutricion();
            $nutricion->nombre = $nut['nombre'];
            $nutricion->user_id =$nut['user_id'];

            $nutricion->save();
        }

    }
}
