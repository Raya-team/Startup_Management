<?php

namespace App\Http\Requests;

use App\Rules\Security;
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
            'Q1' => ['required', new Security()],
            'Q2' => ['required', new Security()],
            'Q3' => ['required', new Security()],
            'Q4' => ['required', new Security()],
            'Q5' => ['required', new Security()],
            'Q6' => ['required', new Security()],
            'Q7' => ['required', new Security()],
            'Q8' => ['required', new Security()],
            'Q9' => ['required', new Security()],
        ];
    }
}
