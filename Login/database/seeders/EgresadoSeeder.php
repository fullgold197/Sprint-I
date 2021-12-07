<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //

        //constructor de consultas sql
        /* DB::table('egresado')->insert(
        [
            'matricula' =>'201520006123',
            'ap_paterno' => 'cabezas',
            'ap_materno'=>'lopez',
            'nombres' => 'Agusto',
            'genero'=> 'Masculino',
            'fecha_nacimiento' => '2021-12-28',
            'telefono'=>'12345678',
            'Provincia' => 'Lima',
            'Distrito' => 'Villa el salvador',
            'habilitado' => '1'
            ]
        ); */

//Utilizando Eloquent, interactuando con el modelo
        Egresado::create(
        [
            'matricula' =>'2016200062',
            'ap_paterno' => 'cruz',
            'ap_materno'=>'huanca',
            'nombres' => 'Jean Carlos',
            'genero'=> 'Masculino',
            'fecha_nacimiento' => '1996-02-19',
            'telefono'=>'936866788',
            'Provincia' => 'Lima',
            'Distrito' => 'SJM',
            'habilitado' => '1',
            'id_academico' => '1'

        ]
        );
        Egresado::create(
            [
                'matricula' =>'2016200241',
                'ap_paterno' => 'vilca',
                'ap_materno'=>'rivera',
                'nombres' => 'Oscar Ernesto',
                'genero'=> 'Masculino',
                'fecha_nacimiento' => '1997-08-01',
                'telefono'=>'912233669',
                'Provincia' => 'Lima',
                'Distrito' => 'V.E.S',
                'habilitado' => '1',
                'id_academico' => '1'
            ]
            );
            Egresado::create(
                [
                    'matricula' =>'2016200186',
                    'ap_paterno' => 'ramos',
                    'ap_materno'=>'machuca',
                    'nombres' => 'Jose Orlando',
                    'genero'=> 'Masculino',
                    'fecha_nacimiento' => '1997-09-30',
                    'telefono'=>'888888888',
                    'Provincia' => 'Lima',
                    'Distrito' => 'V.E.S',
                    'habilitado' => '1',
                    'id_academico' => '1'
                ]
                );
                Egresado::create(
                    [
                        'matricula' =>'2016200216',
                        'ap_paterno' => 'silvera',
                        'ap_materno'=>'iñigo',
                        'nombres' => 'Nathan Josue',
                        'genero'=> 'Masculino',
                        'fecha_nacimiento' => '1999-03-14',
                        'telefono'=>'777777777',
                        'Provincia' => 'Lima',
                        'Distrito' => 'V.E.S',
                        'habilitado' => '1',
                        'id_academico' => '1'
                    ]
                    );
                    Egresado::create(
                        [
                            'matricula' =>'2016200092',
                            'ap_paterno' => 'gomez',
                            'ap_materno'=>'flores',
                            'nombres' => 'Elias',
                            'genero'=> 'Masculino',
                            'fecha_nacimiento' => '1999-03-04',
                            'telefono'=>'666666666',
                            'Provincia' => 'Lima',
                            'Distrito' => 'V.E.S',
                            'habilitado' => '1',
                            'id_academico' => '1'
                        ]
                        );

    }
}
