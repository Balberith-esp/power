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
			'tipo' => 'hiperproteica',
			'clasificacion' => '8',
			'user_id' => '1',
        ),
        array(
            'nombre' => 'Dieta definicion',
			'tipo' => 'KETO',
			'clasificacion' => '4',
			'user_id' => '1',
        ),
        array(
            'nombre' => 'Dieta semanal',
			'tipo' => 'estandar',
			'clasificacion' => '8',
			'user_id' => '2',
        ),
        array(
            'nombre' => 'Dieta verano',
			'tipo' => 'temporada',
			'clasificacion' => '4',
			'user_id' => '2',
        ),
        array(
            'nombre' => 'Dieta alto rendimiento',
			'tipo' => 'deportiva',
			'clasificacion' => '8',
			'user_id' => '2',
        ),
    );
    public function run()
    {
        //
        foreach ($this->nutricion as $nut){
            $nutricion = new Nutricion();
            $nutricion->nombre = $nut['nombre'];
            $nutricion->tipo = $nut['tipo'];
            $nutricion->clasificacion = $nut['clasificacion'];
            $nutricion->user_id =$nut['user_id'];

            $nutricion->save();
        }

    }
}
