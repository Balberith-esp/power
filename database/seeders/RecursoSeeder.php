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
            'path' => '../resources/assets/pdf/1617817420.1.pdf',
            'commentable_id' => 1,
            'commentable_type' => 'nutricion',
            'user_id' => 1,
        ),
		array(
            'path' => '../resources/assets/pdf/1617817512.1.pdf',
            'commentable_id' => 2,
            'commentable_type' => 'nutricion',
            'user_id' => 1,
        ),
        // Nutricion segundo usuario
		array(
            'path' => '../resources/assets/pdf/1617818224.2.pdf',
            'commentable_id' => 3,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
		array(
            'path' => '../resources/assets/pdf/1617818245.2.pdf',
            'commentable_id' => 4,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
		array(
            'path' => '../resources/assets/pdf/1617818281.2.pdf',
            'commentable_id' => 5,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
        // Ejercicios primer usuario
		array(
            'path' => '../resources/assets/pdf/1617817863.1.pdf',
            'commentable_id' => 1,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),
		array(
            'path' => '../resources/assets/pdf/1617818048.1.pdf',
            'commentable_id' => 2,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),
        array(
            'path' => '../resources/assets/pdf/1617818120.1.pdf',
            'commentable_id' => 3,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),
        // Ejercicios segundo usuario
		array(
            'path' => '../resources/assets/pdf/1617818330.2.pdf',
            'commentable_id' => 4,
            'commentable_type' => 'ejercicio',
            'user_id' => 2,
        ),
        array(
            'path' => '../resources/assets/pdf/1617818374.2.pdf',
            'commentable_id' => 5,
            'commentable_type' => 'ejercicio',
            'user_id' => 2,
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
