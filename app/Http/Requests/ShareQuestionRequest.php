<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShareQuestionRequest extends FormRequest
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
            'Q1' => ['required'],
            'Q2' => ['required'],
            'Q3' => ['required'],
            'Q4' => ['required'],
            'Q5' => ['required'],
            'Q6' => ['required'],
            'Q7' => ['required'],
            'Q8' => ['required'],
            'Q9' => ['required']
        ];
    }
}
