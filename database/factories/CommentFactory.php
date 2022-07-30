<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CommentFactory extends Factory{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'post_id' => $this->faker->randomNumber(),//
'content' => $this->faker->word(),
'created_by' => $this->faker->word(),
'created_at' => Carbon::now(),
'updated_at' => Carbon::now(),
        ];
    }
}
