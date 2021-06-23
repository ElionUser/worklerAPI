<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PersonalSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LanguagueSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ExperiecesSeeder::class);
        $this->call(ExpertisesSeeder::class);
        
    }
}
