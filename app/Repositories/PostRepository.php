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

    public function getPostWithComments(int $postId){
        return $this->entity->where('id', '=', $postId)->with(['comments','comments.replies'])->first();
    }
}
