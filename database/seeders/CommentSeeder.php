<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
       $level1 =  \App\Models\Comment::factory(1)->create(
            [
                'post_id' =>  1,
                'level' => 1
            ]
        );

        $level2 =  \App\Models\Comment::factory(1)->create(
            [
                'post_id' =>  1,
                'level' => '2',
                'parent_id' => data_get($level1->first(),'id')
            ]
        );

        $level3 =  \App\Models\Comment::factory(1)->create(
            [
                'post_id' =>  1,
                'level' => '3',
                'parent_id' => data_get($level2->first(),'id')
            ]
        );
    }
}
