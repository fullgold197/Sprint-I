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
        // \App\Models\User::factory(10)->create();

        $this->call(AcademicoSeeder::class);
        $this->call(MaestriaSeeder::class);
        $this->call(DoctoradoSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(EgresadoSeeder::class);
        $this->call(UsersSeeder::class);


    }
}
