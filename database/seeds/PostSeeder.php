<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    
    public function run()
    {
        Post::insert([
            [
                'name_post' => 'Post 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum aperiam nostrum corporis sint. Nesciunt saepe esse nulla pariatur natus. Incidunt natus cumque cupiditate nihil modi adipisci mollitia neque nulla?',
                'img_post' => '01.jpg',
                'postable_id' => 1,
                'postable_type' => 'App\Company',
            ],
            [
                'name_post' => 'Post 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum aperiam nostrum corporis sint. Nesciunt saepe esse nulla pariatur natus. Incidunt natus cumque cupiditate nihil modi adipisci mollitia neque nulla?',
                'img_post' => '02.jpg',
                'postable_id' => 1,
                'postable_type' => 'App\User',
            ],
            [
                'name_post' => 'Post 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum aperiam nostrum corporis sint. Nesciunt saepe esse nulla pariatur natus. Incidunt natus cumque cupiditate nihil modi adipisci mollitia neque nulla?',
                'img_post' => '03.jpg',
                'postable_id' => 2,
                'postable_type' => 'App\Company',
            ],
            [
                'name_post' => 'Post 4',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum aperiam nostrum corporis sint. Nesciunt saepe esse nulla pariatur natus. Incidunt natus cumque cupiditate nihil modi adipisci mollitia neque nulla?',
                'img_post' => '04.jpg',
                'postable_id' => 2,
                'postable_type' => 'App\User',
            ],
            [
                'name_post' => 'Post 5',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum aperiam nostrum corporis sint. Nesciunt saepe esse nulla pariatur natus. Incidunt natus cumque cupiditate nihil modi adipisci mollitia neque nulla?',
                'img_post' => '05.jpg',
                'postable_id' => 3,
                'postable_type' => 'App\Company',
            ],
            [
                'name_post' => 'Post 6',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum aperiam nostrum corporis sint. Nesciunt saepe esse nulla pariatur natus. Incidunt natus cumque cupiditate nihil modi adipisci mollitia neque nulla?',
                'img_post' => '06.jpg',
                'postable_id' => 3,
                'postable_type' => 'App\User',
            ],
            [
                'name_post' => 'Post 7',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eum aperiam nostrum corporis sint. Nesciunt saepe esse nulla pariatur natus. Incidunt natus cumque cupiditate nihil modi adipisci mollitia neque nulla?',
                'img_post' => '07.jpg',
                'postable_id' => 4,
                'postable_type' => 'App\Company',
            ],
        ]);
    }
}

