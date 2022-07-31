<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Comment */
class CommentResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'post_id'    => $this->post_id,
            'parent_id'    => $this->parent_id,
            'content'    => $this->content,
            'comments'   => CommentResource::collection($this->whenLoaded('replies')),
            'level'      => $this->level,
            'created_by' => $this->created_by,
            'created_at' => Carbon::parse($this->created_at)->diffForHumans(),
        ];
    }
}
