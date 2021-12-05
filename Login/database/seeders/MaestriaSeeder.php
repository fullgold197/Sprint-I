<?php

namespace Database\Seeders;

use App\Models\Maestria;
use Illuminate\Database\Seeder;

class MaestriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $egresado = new Maestria();
        $egresado->grado_academico = 'Maestro';
        $egresado->pais = 'Peru';
        $egresado->institución = 'UNMSM';
        $egresado->fecha_inicial = '2022-07-01';
        $egresado->fecha_final = '2023-07-01';
        $egresado->id_academico  = '1';
        $egresado->save();

        $egresado1 = new Maestria();
        $egresado1->grado_academico = 'Maestro';
        $egresado1->pais = 'Peru';
        $egresado1->institución = 'UNI';
        $egresado1->fecha_inicial = '2022-05-01';
        $egresado1->fecha_final = '2023-05-01';
        $egresado1->id_academico  = '2';
        $egresado1->save();
         */

        Maestria::create(
            [
                'grado_academico' =>'Maestro',
                'pais' => 'Peru',
                'institución'=>'UNMSM',
                'fecha_inicial' => '2022-07-01',
                'fecha_final'=> '2023-07-01',
                'id_academico' => '1',
            ]
            );
      Maestria::create(
            [
                'grado_academico' =>'Maestro',
                'pais' => 'Peru',
                'institución'=>'UNI',
                'fecha_inicial' => '2022-05-01',
                'fecha_final'=> '2023-05-01',
                'id_academico' => '1',
            ]
            );
    }
}
