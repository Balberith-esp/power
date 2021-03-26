<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsuarioSeeder::class);
        $this->call(EjercicioSeeder::class);
        $this->call(NutricionSeeder::class);
        $this->call(RecursoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(HistorialSeeder::class);
        $this->call(RolUserSeeder::class);

    }
}
