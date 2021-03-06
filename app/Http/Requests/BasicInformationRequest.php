<?php

namespace App\Http\Requests;

use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class BasicInformationRequest extends FormRequest
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
            'number_of_plan_year' => ['required','numeric','max:10'],
            'dollar' => ['required','numeric'],
            'inflation' => ['required','numeric'],
            'loan' => ['required','numeric'],
            'profit' => ['required','numeric'],
            'reimbursement' => ['required','numeric'],
            'number_of_day_1' => ['required','numeric'],
            'number_of_day_2' => ['required','numeric'],
            'number_of_day_3' => ['required','numeric'],
            'number_of_day_4' => ['required','numeric'],
            'depreciation_rate_1' => ['required','numeric','max:100'],
            'depreciation_rate_2' => ['required','numeric','max:100'],
            'depreciation_rate_3' => ['required','numeric','max:100'],
            'depreciation_rate_4' => ['required','numeric','max:100'],
            'depreciation_rate_5' => ['required','numeric','max:100'],
            'depreciation_rate_6' => ['required','numeric','max:100'],
            'type' => ['required', new Security()],
        ];
    }
}
