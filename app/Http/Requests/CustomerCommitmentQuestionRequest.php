<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCommitmentQuestionRequest extends FormRequest
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
        ];
    }
}
