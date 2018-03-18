<?php

use App\Education;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = [
            'degree' => 'Licenciatura',
            'name' => 'Ingeniería en sistemas computacionales',
            'institution' => 'Instituto Tecnológico de Tuxtla, Gutierrez, Tuxtla Gutierrez, Chiapas',
            'initialdate' => '2012-07-22',
            'finaldate' => '2016-12-22',
            'user_id' => '1'
        ];

        Education::create($education);
    }
}
