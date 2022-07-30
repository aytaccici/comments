<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\Comment */class CommentResource extends JsonResource{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
'post_id' => $this->post_id,
'content' => $this->content,
'created_by' => $this->created_by,
'created_at' => $this->created_at,
'updated_at' => $this->updated_at,
        ];
    }
}
