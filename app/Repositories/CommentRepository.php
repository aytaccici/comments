<?php

namespace App\Repositories;

use App\Contracts\PostContract;
use App\Models\Post;

class PostRepository extends  BaseRepository implements PostContract
{

    /**
     * @return string
     */
    protected function entity()
    {
        return Post::class;
    }
}
