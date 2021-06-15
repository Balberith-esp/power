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
            'titulo' => 'Post 1 sin recurso',
            'contenido' => 'Post 1 sin recurso',
            'tipo' => '0',
            'tieneRecurso' => '0',
            'user_id'=>'1',
            'usuario' => 'Jesus Cuevas Gonzalez',
        ),
        array(
            'titulo' => 'Post 2 sin recurso',
            'contenido' => 'Post 2  sin recurso',
            'tipo' => '0',
            'tieneRecurso' => '0',
            'user_id'=>'2',
            'usuario' => 'Pedro power',
        ),
        array(
            'titulo' => 'Post 3 con recurso',
            'contenido' => 'Post 3 con recurso',
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
