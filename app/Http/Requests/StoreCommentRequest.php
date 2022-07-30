<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'parent_id' => 'nullable|numeric',
            'content' => 'required|string',
            'created_by' => 'required|string',
            'level'  => 'required|numeric'
        ];
    }


    public function authorize(): bool
    {
        return true;
    }
}
