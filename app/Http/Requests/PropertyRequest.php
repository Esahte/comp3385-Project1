<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class PropertyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'       => ['required'],
            'bedrooms'    => ['required', 'integer'],
            'bathrooms'   => ['required', 'integer'],
            'location'    => ['required'],
            'price'       => ['required', 'numeric'],
            'type'        => ['required'],
            'description' => ['required'],
            'photo'       => [
                'required',
                File::types(['png', 'jpg', 'webp', 'svg'])->max(12 * 1024)
            ],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
