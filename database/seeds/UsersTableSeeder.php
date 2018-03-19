<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            'name' => 'Zenaido Norberto Hernández González',
            'objetive' => 'Ingeniero en sistemas computacionales, deseoso en participar en proyectos de desarrollo web, contribuyendo al crecimiento y desarrollo de quien requiera mis servicios, apegado al trabajo en equipo y en la mejora continua para alcanzar los objetivos de la organización.',
            'email' => 'goz.694@gmail.com',
            'phone' => '9671330492',
            'address' => 'Ciudad de México',
            'birthdate' => '1994-06-06',
            'photo' => 'img.jpg'
        ];

        User::create($user);
    }
}
