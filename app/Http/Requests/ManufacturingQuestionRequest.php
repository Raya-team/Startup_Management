<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManufacturingQuestionRequest extends FormRequest
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
            'q1' => ['required', 'boolean'],
            'q2' => ['required', 'boolean'],
            'q3' => ['required', 'boolean'],
            'q4' => ['required', 'boolean'],
            'q5' => ['required', 'boolean'],
            'q6' => ['required', 'boolean'],
            'q7' => ['required', 'boolean'],
            'q8' => ['required', 'boolean'],
            'q9' => ['required', 'boolean'],
            'q10' => ['required', 'boolean'],
            'q11' => ['required', 'boolean'],
            'q12' => ['required', 'boolean'],
            'q13' => ['required', 'boolean'],
            'q14' => ['required', 'boolean'],
            'q15' => ['required', 'boolean'],
            'q16' => ['required', 'boolean'],
            'q17' => ['required', 'boolean'],
            'q18' => ['required'], 'boolean',
            'q19' => ['required', 'boolean'],
            'q20' => ['required', 'boolean'],
            'q21' => ['required', 'boolean'],
            'q22' => ['required', 'boolean'],
            'q23' => ['required', 'boolean'],
            'q24' => ['required', 'boolean'],
            'q25' => ['required', 'boolean'],
            'q26' => ['required', 'boolean'],
            'q27' => ['required', 'boolean'],
            'q28' => ['required', 'boolean'],
            'q29' => ['required', 'boolean'],
            'q30' => ['required', 'boolean'],
        ];
    }
}
