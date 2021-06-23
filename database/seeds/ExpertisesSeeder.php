<?php

use Illuminate\Database\Seeder;
Use App\Expertice;

class ExpertisesSeeder extends Seeder
{
    
    public function run()
    {
        Expertice::insert([
            [
                'expertice' => 'Salud',
            ],
            [
                'expertice' => 'Ingenieria',
            ],
            [
                'expertice' => 'Odontologia',
            ],
            [
                'expertice' => 'Abogacia',
            ],
            [
                'expertice' => 'Desarrollo de software web',
            ],
            [
                'expertice' => 'Desarrollo de software de escritorio',
            ],
            [
                'expertice' => 'Contabilidad',
            ],
        ]);
    }
}
