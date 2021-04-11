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
            'path' => '../resources/assets/pdf/1618129906.1.pdf',
            'commentable_id' => 1,
            'commentable_type' => 'nutricion',
            'user_id' => 1,
        ),
		array(
            'path' => '../resources/assets/pdf/1618129940.1.pdf',
            'commentable_id' => 2,
            'commentable_type' => 'nutricion',
            'user_id' => 1,
        ),
        // Nutricion segundo usuario
		array(
            'path' => '../resources/assets/pdf/1618130145.2.pdf',
            'commentable_id' => 3,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
		array(
            'path' => '../resources/assets/pdf/1618130192.2.pdf',
            'commentable_id' => 4,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
		array(
            'path' => '../resources/assets/pdf/1618130234.2.pdf',
            'commentable_id' => 5,
            'commentable_type' => 'nutricion',
            'user_id' => 2,
        ),
        // Ejercicios primer usuario
		array(
            'path' => '../resources/assets/pdf/1618129271.1.pdf',
            'commentable_id' => 1,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),
		array(
            'path' => '../resources/assets/pdf/1618129382.1.pdf',
            'commentable_id' => 2,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),
        array(
            'path' => '../resources/assets/pdf/1618129456.1.pdf',
            'commentable_id' => 3,
            'commentable_type' => 'ejercicio',
            'user_id' => 1,
        ),
        // Ejercicios segundo usuario
		array(
            'path' => '../resources/assets/pdf/1618130049.2.pdf',
            'commentable_id' => 4,
            'commentable_type' => 'ejercicio',
            'user_id' => 2,
        ),
        array(
            'path' => '../resources/assets/pdf/1618130083.2.pdf',
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
