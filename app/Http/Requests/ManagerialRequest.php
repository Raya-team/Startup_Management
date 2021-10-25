<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagerialRequest extends FormRequest
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
            'about_team' => ['required'],
            'vision' => ['required'],
            'mission' => ['required'],
            'key_competencies' => ['required'],
            'targets' => ['required'],
            'problem_statement' => ['required'],
            'description' =>['required'],
            'acquisition_year' =>['required'],
            'comment' => ['required'],
        ];
    }
}
