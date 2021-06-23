<?php

use Illuminate\Database\Seeder;
use App\Experience;

class ExperiecesSeeder extends Seeder
{
    
    public function run()
    {
        Experience::insert([
            [
                'formation_id' => 1,
                'company_id' => 5,
                'description' => 'Experiencia 1',
                'since' => '12/12/2020',
                'until' => '12/12/2020',
            ],
            [
                'formation_id' => 2,
                'company_id' => 1,
                'description' => 'Experiencia 2',
                'since' => '12/12/2020',
                'until' => '12/12/2020',
            ],
            [
                'formation_id' => 3,
                'company_id' => 2,
                'description' => 'Experiencia 3',
                'since' => '12/12/2020',
                'until' => '12/12/2020',
            ],
            [
                'formation_id' => 4,
                'company_id' => 3,
                'description' => 'Experiencia 4',
                'since' => '12/12/2020',
                'until' => '12/12/2020',
            ],
            [
                'formation_id' => 5,
                'company_id' => 4,
                'description' => 'Experiencia 5',
                'since' => '12/12/2020',
                'until' => '12/12/2020',
            ],
        ]);
    }
}

