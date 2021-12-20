<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carrera;
class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create(
            [
                'carrera' => 'Ingeniería de Sistemas',
            ]
        );
        Carrera::create(
            [
                'carrera' => 'Ingeniería Electrónica y Telecomunicaciones',
            ]
        );
        Carrera::create(
            [
                'carrera' => 'Ingeniería Ambiental',
            ]
        );
        Carrera::create(
            [
                'carrera' => 'Ingeniería Mecánica y Eléctrica',
            ]
        );
        Carrera::create(
            [
                'carrera' => 'Administración de Empresas',
            ]
        );
    }
}
