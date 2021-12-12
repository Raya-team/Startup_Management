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
            'managerial.about_team' => ['required',new Persian()],
            'managerial.vision' => ['required',new Persian()],
            'managerial.mission' => ['required',new Persian()],
            'managerial.key_competencies' => ['required',new Persian()],
            'managerial.targets' => ['required',new Persian()],
            'managerial.problem_statement' => ['required',new Persian()],
            'obtained_certificate.*.description' => ['required',new Persian()],
            'obtained_certificate.*.acquisition_year' => ['required','numeric'],
            'obtained_certificate.*.comment' => ['required',new Persian()],
            'plan_implementations.*.subject_of_work' => ['required',new Persian()],
            'plan_implementations.*.duration_of_work' => ['required',new Security()],
        ];
    }
}
