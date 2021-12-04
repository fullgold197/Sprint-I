<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Egresado;
class EgresadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $egresado=new Egresado();
        $egresado->matricula= '2016200241';
        $egresado->ap_paterno='Vilca';
        $egresado->ap_materno='Rivera';
        $egresado->nombres='Oscar Ernesto';
        $egresado->genero='Masculino';
        $egresado->fecha_nacimiento='1997-08-01';
        $egresado->telefono='912233669';
        $egresado->Provincia='Lima';
        $egresado->Distrito='Villa El Salvador';
        $egresado->habilitado='1';
        $egresado->id_academico  = '1';
        $egresado->id_profesion = '1';
        $egresado->save();

        $egresado1=new Egresado();
        $egresado1->matricula='2016200062';
        $egresado1->ap_paterno='Cruz';
        $egresado1->ap_materno='Huanca';
        $egresado1->nombres='Jean Carlos';
        $egresado1->genero='Masculino';
        $egresado1->fecha_nacimiento='1996-08-01';
        $egresado1->telefono='912233662';
        $egresado1->Provincia='Lima';
        $egresado1->Distrito='San Juan de Miraflores';
        $egresado1->habilitado='1';
        $egresado1->id_academico  = '2';
        $egresado1->id_profesion = '2';
        $egresado1->save();
    }
}
