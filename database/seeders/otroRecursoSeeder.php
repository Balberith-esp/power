<?php

namespace Database\Seeders;
use App\Models\otroRecurso;

use Illuminate\Database\Seeder;

class otroRecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        private $otro = array(
		array(
			'titulo' => 'Biceps y triceps',
			'lineas' => 'Curl de un solo brazo en banco inclinado./Curl con banda de resistencia./Curl con mancuernas en banco inclinado./Curl de martillo de pie.',
            'tipo' => 'ejercicio',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'biceps.png',
        ),
        array(
			'titulo' => 'Cuadriceps y femoral',
			'lineas' => 'Sentadilla Asistida./Sentadilla Isométrica (Wall Sit)/Zancadas o Estocadas./Subidas al Banco (Step Up).',
            'tipo' => 'ejercicio',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'cuadriceps.png',
        ),
        array(
			'titulo' => 'Pectoral',
			'lineas' => 'Curl de un solo brazo en banco inclinado./Curl con banda de resistencia./Curl con mancuernas en banco inclinado./Curl de martillo de pie.',
            'tipo' => 'ejercicio',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'pectoral.png',
        ),
        array(
			'titulo' => 'Biceps y triceps',
			'lineas' => 'Curl de un solo brazo en banco inclinado./Curl con banda de resistencia./Curl con mancuernas en banco inclinado./Curl de martillo de pie.',
            'tipo' => 'ejercicio',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'biceps.png',
        ),);
    public function run()
    {
        //
        foreach ($this->otro as $o){
            $otro = new otroRecurso();
            $otro->titulo = $o['titulo'];
            $otro->lineas =$o['lineas'];
            $otro->tipo =$o['tipo'];
            $otro->recurso =$o['recurso'];
            $otro->pathImagen =$o['pathImagen'];

            $otro->save();
        }
    }
}
