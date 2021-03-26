<?php

namespace Database\Seeders;

use App\Models\Historial;
use Illuminate\Database\Seeder;

class HistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $historial = array(
		array(
			'peso' => 78.20,
			'created_at' => '2021-03-26 16:17:05',
			'sensacionMejora' => 'Sensacion positiva',
			'user_id' => '1',
        ),
        array(
			'peso' => 79.30,
			'created_at' => '2021-02-26 16:17:05',
			'sensacionMejora' => 'Sensacion muy buena',
			'user_id' => '1',
        ),
    );
    public function run()
    {
        //
        foreach ($this->historial as $hist){
            $historial = new Historial();
            $historial->peso = $hist['peso'];
            $historial->created_at = $hist['created_at'];
            $historial->sensacionMejora = $hist['sensacionMejora'];
            $historial->user_id =$hist['user_id'];

            $historial->save();
        }

    }
}
