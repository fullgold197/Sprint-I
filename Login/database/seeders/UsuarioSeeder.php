<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Egresado;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //Obteniendo el valor del campo matricula con la sentencia where usando el constructor de consultas sql
        /* $egresadoID=DB::table('egresado')
        ->where('matricula','2016200062')
        ->value('matricula'); */

        //Utilizando Eloquent, e interactuando con el modelo
        $egresadoID=Egresado::where('matricula','2016200062')
        ->value('matricula');
        $egresadoID2=Egresado::where('matricula','2016200241')
        ->value('matricula');
        $egresadoID3=Egresado::where('matricula','2016200186')
        ->value('matricula');

        User::create(
        [
            'name' => 'Jean',
            'email' =>'cruzjean52@gmail.com',
            'password' => bcrypt('12345678'),
            'egresado_matricula'=> $egresadoID,
            'role_as' => '1'

        ]
        );
        User::create(
            [
                'name' => 'Oscar',
                'email' =>'oevr1997@gmail.com',
                'password' => bcrypt('12345678'),
                'egresado_matricula'=> $egresadoID2,
                'role_as' => '1'

            ]
            );
        User::create(
            [
                'name' => 'Orlando',
                'email' =>'orlando@gmail.com',
                'password' => bcrypt('12345678'),
                'egresado_matricula'=> $egresadoID3,
                'role_as' => '0'

            ]
            );

    }
}
