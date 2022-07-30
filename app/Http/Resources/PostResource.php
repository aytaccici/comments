<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Post */
class PostResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'title'      => $this->title,
            'category'   => $this->category,
            'comments'   => CommentResource::collection($this->whenLoaded('comments')),
            'created_by' => $this->created_by,
            'created_at' => Carbon::parse($this->created_at)->diffForHumans(),
        ];
    }
}
