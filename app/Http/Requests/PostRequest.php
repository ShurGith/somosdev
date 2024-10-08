<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => 'required|min:25|max:200',
            'excerpt' => 'required|min:100|max:500',
            'content' => 'required|min:100',
            'file_image'=> ['required',File::image()->max(5 * 1024)],
        ];
    }
}
