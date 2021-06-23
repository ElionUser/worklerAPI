<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    
    public function run()
    {
        Company::insert([
            [
                'company_name' => 'MercadoLibre',
                'company_img' => 'mp.jpg',
            ],
            [
                'company_name' => 'Udemy',
                'company_img' => 'Udemy.jpg',
            ],
            [
                'company_name' => 'Carrefour',
                'company_img' => 'Carrefour.jpg',
            ],
            [
                'company_name' => 'Samsung',
                'company_img' => 'Samsung.jpg',
            ],
            [
                'company_name' => 'Sony',
                'company_img' => 'Sony.jpg',
            ],
        ]);
    }
}
