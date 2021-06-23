<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguagueSeeder extends Seeder
{

    public function run()
    {
    
        Language::insert([
            [
                'language' => 'Español',
            ],
            [
                'language' => 'Ingles',
            ],
            [
                'language' => 'Portugues',
            ],
        ]);
    }
}
