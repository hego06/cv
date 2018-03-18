<?php

use App\Skilluser;
use Illuminate\Database\Seeder;

class SkillUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skillsUser = array(
            [
                'user_id' => '1',
                'skill_id' => '1',
                'level' => '70'
            ],
            [
                'user_id' => '1',
                'skill_id' => '2',
                'level' => '50'
            ],
            [
                'user_id' => '1',
                'skill_id' => '3',
                'level' => '50'
            ],
            [
                'user_id' => '1',
                'skill_id' => '4',
                'level' => '70'
            ],
            [
                'user_id' => '1',
                'skill_id' => '5',
                'level' => '50'
            ],
            [
                'user_id' => '1',
                'skill_id' => '6',
                'level' => '40'
            ],
            [
                'user_id' => '1',
                'skill_id' => '7',
                'level' => '50'
            ]
        );

        foreach ($skillsUser as $skilsUser) {
            Skilluser::create($skilsUser);
        }
    }
}
