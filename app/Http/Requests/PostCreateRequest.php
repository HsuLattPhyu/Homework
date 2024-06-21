<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
  
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'content' => 'required',
            'is_published'=> 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The Name field is required',
            'title.max' => 'The Name must not be greater than 255 charaters',
            'content.required' => 'The body field is required',
        ];
    }
}
