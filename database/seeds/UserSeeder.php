<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
   
    public function run()
    {
        User::insert([
            [
                'name' => 'Matias E.Diarte',
                'email' => 'diartematias31@gmail.com',
                'password' => bcrypt('22363033'),
                'personal_id' => 1,
            ],
            [
                'name' => 'Jesica A.Saracho',
                'email' => 'jesy_sara@hotmail.com',
                'password' => bcrypt('22363033'),
                'personal_id' => 2,
            ],
            [
                'name' => 'Martin Saracho',
                'email' => 'Martin@gmail.com',
                'password' => bcrypt('22363033'),
                'personal_id' => 3,
            ],
            [
                'name' => 'Alejandor Lopez',
                'email' => 'AleLopez@hotmail.com',
                'password' => bcrypt('22363033'),
                'personal_id' => 4,
            ],
            [
                'name' => 'Matias Romero',
                'email' => 'Matute@hotmail.com',
                'password' => bcrypt('22363033'),
                'personal_id' => 5,
            ],
        ]);
    }
}
