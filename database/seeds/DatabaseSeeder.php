<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            if ($table->Tables_in_cv !== 'migrations')
                DB::table($table->Tables_in_cv)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        $this->call(UsersTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(SkillUserTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
    }
}
