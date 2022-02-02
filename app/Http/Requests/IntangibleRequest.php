<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntangibleRequest extends FormRequest
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
        if ($this->request->get('valuation_model') == 3) {
            return [
                'question_1' => ['required', 'numeric'],
                'question_2' => ['required', 'numeric'],
                'question_3' => ['required', 'numeric'],
                'question_4' => ['required', 'numeric'],
                'valuation_model' => ['required'],
                'value' => ['required', 'numeric']
            ];
        }else{
            return [
                'question_1' => ['required', 'numeric'],
                'question_2' => ['required', 'numeric'],
                'question_3' => ['required', 'numeric'],
                'question_4' => ['required', 'numeric'],
                'valuation_model' => ['required'],
            ];
        }
    }
}
