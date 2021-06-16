<?php

namespace Database\Seeders;
use App\Models\Foro;
use Illuminate\Database\Seeder;

class ForoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $posts = array(
        // Nutricion primer usuario
		array(
            'titulo' => 'Mi primera semana de entrenamiento',
            'contenido' => 'Esta es la experiencia de mi primera semana entrenando con la rutina que me hice con el objetivo de
                            mantiniento de cara al verano....
                            Adjunto el entrenamiento por si le quereis seguir',
            'tipo' => '0',
            'tieneRecurso' => '1',
            'user_id'=>'1',
            'usuario' => 'Jesus Cuevas Gonzalez',
        ),
        array(
            'titulo' => 'Segundo mes con una rutina para mantener ',
            'contenido' => 'Queria comentar la rutina de ejercicios que llevo realizando con el objetivo de 
                mantener la forma fisica durante los ultimos meses, llevo utilizando esta web durante el ultimo año
                y puedo decir que estoy bastante satisfecho los resultado conseguidos...',
            'tipo' => '0',
            'tieneRecurso' => '0',
            'user_id'=>'2',
            'usuario' => 'Pedro power',
        ),
        array(
            'titulo' => 'Dieta nueva creada para compensar los helados del verano :P',
            'contenido' => 'Os paso la nueva dieta que he creado un saludo amigos (^^)/',
            'tipo' => '1',
            'tieneRecurso' => '1',
            'user_id'=>'2',
            'usuario' => 'Pedro power',
        ),
        array(
            'titulo' => 'Mi primera semana de entrenamiento',
            'contenido' => 'Esta es la experiencia de mi primera semana entrenando con la rutina que me hice con el objetivo de
                            mantiniento de cara al verano....
                            Adjunto el entrenamiento por si le quereis seguir',
            'tipo' => '0',
            'tieneRecurso' => '1',
            'user_id'=>'1',
            'usuario' => 'Jesus Cuevas Gonzalez',
        ),
        array(
            'titulo' => 'Segundo mes con una rutina para mantener ',
            'contenido' => 'Queria comentar la rutina de ejercicios que llevo realizando con el objetivo de 
                mantener la forma fisica durante los ultimos meses, llevo utilizando esta web durante el ultimo año
                y puedo decir que estoy bastante satisfecho los resultado conseguidos...',
            'tipo' => '0',
            'tieneRecurso' => '0',
            'user_id'=>'2',
            'usuario' => 'Pedro power',
        ),
        array(
            'titulo' => 'Dieta nueva creada para compensar los helados del verano :P',
            'contenido' => 'Os paso la nueva dieta que he creado un saludo amigos (^^)/',
            'tipo' => '1',
            'tieneRecurso' => '1',
            'user_id'=>'2',
            'usuario' => 'Pedro power',
        ),
        array(
            'titulo' => 'Mi primera semana de entrenamiento',
            'contenido' => 'Esta es la experiencia de mi primera semana entrenando con la rutina que me hice con el objetivo de
                            mantiniento de cara al verano....
                            Adjunto el entrenamiento por si le quereis seguir',
            'tipo' => '0',
            'tieneRecurso' => '1',
            'user_id'=>'1',
            'usuario' => 'Jesus Cuevas Gonzalez',
        ),
        array(
            'titulo' => 'Segundo mes con una rutina para mantener ',
            'contenido' => 'Queria comentar la rutina de ejercicios que llevo realizando con el objetivo de 
                mantener la forma fisica durante los ultimos meses, llevo utilizando esta web durante el ultimo año
                y puedo decir que estoy bastante satisfecho los resultado conseguidos...',
            'tipo' => '0',
            'tieneRecurso' => '0',
            'user_id'=>'2',
            'usuario' => 'Pedro power',
        ),
        array(
            'titulo' => 'Dieta nueva creada para compensar los helados del verano :P',
            'contenido' => 'Os paso la nueva dieta que he creado un saludo amigos (^^)/',
            'tipo' => '1',
            'tieneRecurso' => '1',
            'user_id'=>'2',
            'usuario' => 'Pedro power',
        ),
        );
    public function run()
    {
        //
        foreach ($this->posts as $post){
            $nuevoPost = new foro();
            $nuevoPost->titulo = $post['titulo'];
            $nuevoPost->contenido = $post['contenido'];
            $nuevoPost->tipo = $post['tipo'];
            $nuevoPost->tieneRecurso = $post['tieneRecurso'];
            $nuevoPost->user_id = $post['user_id'];
            $nuevoPost->usuario = $post['usuario'];
            $nuevoPost->save();
        }
    }
}
