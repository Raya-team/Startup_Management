<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShareVariableRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'idea' => ['required' , 'numeric'],
            'finance' => ['required' , 'numeric'],
            'experience' => ['required' , 'numeric'],
            'risk' => ['required' , 'numeric'],
            'technology' => ['required' , 'numeric'],
            'investment' => ['required' , 'numeric'],
            'management' => ['required' , 'numeric'],
            'sale' => ['required' , 'numeric'],
            'full_time' => ['required' , 'numeric'],
        ];
    }
}
