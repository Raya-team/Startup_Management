<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
            'managerial.about_team' => ['required'],
            'managerial.vision' => ['required'],
            'managerial.mission' => ['required'],
            'managerial.key_competencies' => ['required'],
            'managerial.targets' => ['required'],
            'managerial.problem_statement' => ['required'],
            'obtained_certificate.*.description' => ['required'],
            'obtained_certificate.*.acquisition_year' => ['required','numeric'],
            'obtained_certificate.*.comment' => ['required'],
            'plan_implementations.*.subject_of_work' => ['required'],
            'plan_implementations.*.duration_of_work' => ['required',new Security()],
        ];
    }
}
