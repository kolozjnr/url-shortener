<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrlRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'link' => 'required|url'
        ];
    }
     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'link.required' => 'URL is required!'
        ];
    }
}
