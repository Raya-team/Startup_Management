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
            'idea' => ['required' , 'numeric', 'max:100'],
            'finance' => ['required' , 'numeric', 'max:100'],
            'experience' => ['required' , 'numeric', 'max:100'],
            'risk' => ['required' , 'numeric', 'max:100'],
            'technology' => ['required' , 'numeric', 'max:100'],
            'investment' => ['required' , 'numeric', 'max:100'],
            'management' => ['required' , 'numeric', 'max:100'],
            'sale' => ['required' , 'numeric', 'max:100'],
            'full_time' => ['required' , 'numeric', 'max:100'],
        ];
    }
}
