<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Post::factory(5)->create();
    }
}
