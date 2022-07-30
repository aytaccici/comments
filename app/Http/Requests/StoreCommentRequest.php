<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'post_id' => 'required|numeric',
            'parent_id' => 'nullable|numeric',
            'content' => 'required|string',
            'created_by' => 'required|string',
            'level'  => 'nullable|numeric'
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
