<?php

namespace Database\Seeders;

use App\Models\Recurso;
use Illuminate\Database\Seeder;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $recursos = array(
        // Nutricion primer usuario
		array(
            'path' => '../resources/assets/pdf/1623858216.1.pdf',
            'commentable_id' => 1,
            'commentable_type' => 'nutricion',
            'user_id' => 1,
        ),
		array(
            'path' => '../resources/assets/pdf/1623858322.1.pdf',
            'commentable_id' => 2,
            'commentable_type' => 'nutricion',
            'user_id' => 1,
        ),

        // Nutricion segundo usuario
		array(
            'path' => '../resources/assets/pdf/1623858838.2.pdf',
            'commentable_id' => 3,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
		array(
            'path' => '../resources/assets/pdf/1623858877.2.pdf',
            'commentable_id' => 4,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
		array(
            'path' => '../resources/assets/pdf/1623858948.2.pdf',
            'commentable_id' => 5,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),


        // Ejercicios primer usuario
		array(
            'path' => '../resources/assets/pdf/1623857531.1.pdf',
            'commentable_id' => 1,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),
		array(
            'path' => '../resources/assets/pdf/1623857771.1.pdf',
            'commentable_id' => 2,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),

        // Ejercicios segundo usuario
		array(
            'path' => '../resources/assets/pdf/1623858668.2.pdf',
            'commentable_id' => 3,
            'commentable_type' => 'ejercicio',
            'user_id' => 2,
        ),
        array(
            'path' => '../resources/assets/pdf/1623858762.2.pdf',
            'commentable_id' => 4,
            'commentable_type' => 'ejercicio',
            'user_id' => 2,
        ),
        array(
            'path' => '../resources/assets/pdf/1623858838.2.pdf',
            'commentable_id' => 3,
            'commentable_type' => 'post',
            'user_id' => 2,
        ),
        array(
            'path' => '../resources/assets/pdf/1623857531.1.pdf',
            'commentable_id' => 1,
            'commentable_type' => 'post',
            'user_id' => 1,
        ),
    );
    public function run()
    {
        //
        foreach($this->recursos as $rec){
            $recurso = new Recurso();
            $recurso->path = $rec['path'];
            $recurso->commentable_id = $rec['commentable_id'];
            $recurso->commentable_type = $rec['commentable_type'];
            $recurso->user_id = $rec['user_id'];
            $recurso->save();
        }
    }
}
