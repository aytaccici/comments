<?php

namespace App\Repositories;

use App\Contracts\CommentContract;
use App\Models\Comment;

class CommentRepository extends  BaseRepository implements CommentContract
{

    /**
     * @return string
     */
    protected function entity()
    {
        return Comment::class;
    }
}
