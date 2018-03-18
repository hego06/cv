<?php

use App\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $experiences = array(
           [
               'name' => 'Residencia',
               'place' => 'ITTG: Departamento de desarrollo e inovacion tecnológica.',
               'description' => 'Programacion en microncontrolador Arduino para el monitoreo de un invernadero, desarrollando tambien una aplicacion de escritorio para el monitoreo y control del mismo.',
               'initialdate' => '2016-07-01',
               'finaldate' => '2016-12-01',
               'user_id' => '1'
           ],
           [
                'name' => 'Soporte técnico',
                'place' => 'MULTICOM, San Cristobal de las casas',
                'description' => 'Manatenimiento preventivo y correctivo de equipos de computo.',
                'initialdate' => '2016-07-01',
                'finaldate' => '2016-12-01',
                'user_id' => '1'
            ]
       ); 

       foreach ($experiences as $experience) {
            Experience::create($experience);
       }
    }
}
