<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')
            ->with('replies')
            ->latest();
    }

}
