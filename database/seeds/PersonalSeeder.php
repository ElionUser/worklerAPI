<?php

use Illuminate\Database\Seeder;
use App\Personal;

class PersonalSeeder extends Seeder
{
    public function run()
    {
        Personal::insert([
            [
                'type_dni'=> 'DNI',
                'number'=> '33797489',
                'birth'=> '26/04/1988',
                'gender'=> 'Masculino',
                'location'=> 'San Justo',
                'adress'=> 'Varela 3838',
                'civil_status'=> 'Soltero',
                'status' => 1,
            ],
            [
                'type_dni'=> 'DNI',
                'number'=> '31415414',
                'birth'=> '07/04/1987',
                'gender'=> 'Femenino',
                'location'=> 'San Justo',
                'adress'=> 'Varela 3838',
                'civil_status'=> 'Soltero',
                'status' => 1,
            ],
            [
                'type_dni'=> 'DNI',
                'number'=> '41017188',
                'birth'=> '17/08/1993',
                'gender'=> 'Masculino',
                'location'=> 'San Justo',
                'adress'=> 'Caupolican 1745',
                'civil_status'=> 'Soltero',
                'status' => 0,
            ],
            [
                'type_dni'=> 'DNI',
                'number'=> '418018227',
                'birth'=> '09/02/1988',
                'gender'=> 'Masculino',
                'location'=> 'San justo',
                'adress'=> 'Ortega 1717',
                'civil_status'=> 'Soltero',
                'status' => 1,
            ],
            [
                'type_dni'=> 'DNI',
                'number'=> '14185162',
                'birth'=> '08/08/1988',
                'gender'=> 'Masculino',
                'location'=> 'San Justo',
                'adress'=> 'Isidro Casanova',
                'civil_status'=> 'Soltero',
                'status' => 1,
            ],
        ]);

        
    }
}
