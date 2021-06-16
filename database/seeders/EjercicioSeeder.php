<?php

namespace Database\Seeders;

use App\Models\Ejercicio;
use Illuminate\Database\Seeder;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $ejercicios = array(
		array(
			'nombre' => 'Entrenamiento full body',
			'zona' => 'Espalda/Pecho/Pierna',
			'vecesRealizada' => '0',
			'user_id' => '1',
        ),
        array(
			'nombre' => 'Entrenamiento Brazo/hombro',
			'zona' => 'Brazo/hombro',
			'vecesRealizada' => '0',
			'user_id' => '1',
        ),

        array(
			'nombre' => 'Entrenamiento Brazo/hombro',
			'zona' => 'Brazo/hombro',
			'vecesRealizada' => '0',
			'user_id' => '2',
        ),

        array(
			'nombre' => 'Entrenamiento grupos principales',
			'zona' => 'Espalda/Pecho/Pierna',
			'vecesRealizada' => '0',
			'user_id' => '2',
        ),
    );
    public function run()
    {
        //
        foreach ($this->ejercicios as $ejer){
            $ejercicio = new Ejercicio();
            $ejercicio->nombre = $ejer['nombre'];
            $ejercicio->zona = $ejer['zona'];
            $ejercicio->vecesRealizada = $ejer['vecesRealizada'];
            $ejercicio->user_id =$ejer['user_id'];

            $ejercicio->save();
        }

    }
}
