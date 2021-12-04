<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();
        $users->name = 'Oscar';
        $users->email = 'oevr1997@gmail.com';
        $users->password = bcrypt('12345678');
        $users->egresado_matricula  = '2016200241';
        $users->role_as  = '1';
        $users->save();

        $users1 = new User();
        $users1->name = 'Jean';
        $users1->email = 'cruzjean52@gmail.com';
        $users1->password = bcrypt('12345678');
        $users1->egresado_matricula  = '2016200062';
        $users1->role_as  = '0';
        $users1->save();
    }
}
