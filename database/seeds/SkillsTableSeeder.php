<?php

use App\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = ['PHP','JavaScript','C#','MySQL','HTML','CSS','Laravel'];

        foreach ($skills as $skill) {
            Skill::create(['name'=>$skill]);
        }
    }
}
