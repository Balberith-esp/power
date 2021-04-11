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
			'descripcion' => 'Rutina cuerpo completo 5 dias/semana, intensidad media',
			'user_id' => '1',
        ),
        array(
			'nombre' => 'Entrenamiento Brazo/hombro',
			'zona' => 'Brazo/hombro',
			'descripcion' => 'Rutina brazo/hombro completo 2 dias/semana, intensidad alta',
			'user_id' => '1',
        ),
        array(
			'nombre' => 'Entrenamiento full ',
			'zona' => 'Espalda/Pecho/Pierna',
			'descripcion' => 'Rutina cuerpo completo 6 dias/semana, intensidad alta',
			'user_id' => '1',
        ),
        array(
			'nombre' => 'Entrenamiento Brazo/hombro',
			'zona' => 'Brazo/hombro',
			'descripcion' => 'Rutina brazo/hombro completo 2 dias/semana, intensidad baja',
			'user_id' => '2',
        ),

        array(
			'nombre' => 'Entrenamiento full body',
			'zona' => 'Espalda/Pecho/Pierna',
			'descripcion' => 'Rutina cuerpo completo 5 dias/semana, intensidad media',
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
            $ejercicio->descripcion = $ejer['descripcion'];
            $ejercicio->user_id =$ejer['user_id'];

            $ejercicio->save();
        }

    }
}
