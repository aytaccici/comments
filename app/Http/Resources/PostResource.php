<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

/** @mixin \App\Models\Post */class PostResource extends JsonResource{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
'title' => $this->title,
'category' => $this->category,
'created_by' => $this->created_by,
'created_at' => $this->created_at,
'updated_at' => $this->updated_at,
        ];
    }
}
