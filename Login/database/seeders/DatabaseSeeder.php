<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $this->call(EgresadosSeeder::class);
        $this->call(UsersSeeder::class);


    }
    public function truncatetables(array $tables){

        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //deshabilitar la revision de claves foráneas
        DB::table('egresado')->truncate(); //para vaciar las tablas antes de  volver a ejecutar los registros nuevamente

        foreach ($tables as $table){
            DB::table($table)->truncate();

        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //habilitar la revision de claves foráneas

    }

}

