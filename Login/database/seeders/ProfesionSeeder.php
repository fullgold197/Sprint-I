<?php

namespace Database\Seeders;

use App\Models\Profesion;
use Illuminate\Database\Seeder;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $egresado = new Profesion();
        $egresado->empresa = 'Meta';
        $egresado->actividad_empresa = 'Desarrollador de tecnologías';
        $egresado->puesto= 'Técnico';
        $egresado->nivel_experiencia = 'Básico';
        $egresado->area_puesto = 'Producción';
        $egresado->subarea = 'ISO';
        $egresado->pais = 'Perú';
        $egresado->fecha_inicio = '2021-08-01';
        $egresado->fecha_finalizacion = '2022-08-01';
        $egresado->descripcion_responsabilidades = 'Desarrollar sistemas tecnológicos';
        $egresado->save();

        $egresado1 = new Profesion();
        $egresado1->empresa = 'Google';
        $egresado1->actividad_empresa = 'Producción de productos y servicios tecnológicos';
        $egresado1->puesto = 'Administrativo';
        $egresado1->nivel_experiencia = 'Intermedio';
        $egresado1->area_puesto = 'Administración';
        $egresado1->subarea = 'ISO';
        $egresado1->pais = 'Perú';
        $egresado1->fecha_inicio = '2021-12-01';
        $egresado1->fecha_finalizacion = '2022-12-01';
        $egresado1->descripcion_responsabilidades = 'Gestionar las tecnologías de la empresa';
        $egresado1->save();
    }
}
