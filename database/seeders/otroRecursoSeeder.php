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
        ),
    		array(
			'titulo' => 'Hiperproteica',
			'lineas' => 'Una dieta proteica es un método que consiste en reducir al máximo el consumo de los carbohidratos/El cuerpo se vea obligado a comenzar a utilizar la grasa consumida',
            'tipo' => 'nutricion',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'proteina.png',
        ),
        array(
			'titulo' => 'KETO',
			'lineas' => 'Se centra en la ingesta de más alimentos ricos en grasas buenas y proteínas/Con una restricción de la ingesta de hidratos de carbono.',
            'tipo' => 'nutricion',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'keto.jpg',
        ),
        array(
			'titulo' => 'Detox',
			'lineas' => 'Un detox sirve para mejorar, optimizar y apoyar el proceso natural de desintoxicación del cuerpo/Disminuir la cantidad de toxinas que ingerimos',
            'tipo' => 'nutricion',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'detox.jpg',
        ),
        array(
			'titulo' => 'Detox',
			'lineas' => 'Un detox sirve para mejorar, optimizar y apoyar el proceso natural de desintoxicación del cuerpo/Disminuir la cantidad de toxinas que ingerimos',
            'tipo' => 'nutricion',
            'recurso' => 'https://www.youtube.com/embed/bek6W-7bliQ',
            'pathImagen' =>'detox.jpg',
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
