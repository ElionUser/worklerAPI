<?php

use Illuminate\Database\Seeder;
use App\Formation;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formation::insert([
            [
                'presentation' => 'Una formacion 1',
                'user_id' => 1,
            ],
            [
                'presentation' => 'Una formacion 2',
                'user_id' => 2,
            ],
            [
                'presentation' => 'Una formacion 3',
                'user_id' => 1,
            ],
            [
                'presentation' => 'Una formacion 4',
                'user_id' => 3,
            ],
            [
                'presentation' => 'Una formacion 5',
                'user_id' => 4,
            ],
        ]);
    }
}
