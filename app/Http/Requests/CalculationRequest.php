<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class CalculationRequest extends FormRequest
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
            'investor_name' => ['required' , 'min:3', 'max:32', new Persian()],
            'percent' => ['required' , 'numeric'],
            'idea' => ['required' , 'numeric'],
            'finance' => ['required' , 'numeric'],
            'experience' => ['required' , 'numeric'],
            'risk' => ['required' , 'numeric'],
            'technology' => ['required' , 'numeric'],
            'investment' => ['required' , 'numeric'],
            'management' => ['required' , 'numeric'],
            'sale' => ['required' , 'numeric'],
            'full_time' => ['required' , 'numeric'],
            'Q1' => ['required', new Security()],
            'Q2' => ['required', new Security()],
            'Q3' => ['required', new Security()],
            'Q4' => ['required', new Security()],
            'Q5' => ['required', new Security()],
            'Q6' => ['required', new Security()],
            'Q7' => ['required', new Security()],
            'Q8' => ['required', new Security()],
            'Q9' => ['required', new Security()]
        ];
    }
}
