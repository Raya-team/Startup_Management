<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class TechnicalRequest extends FormRequest
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
            'technical.product_introduction' => ['required',new Persian()],
            'technical.technical_specifications' => ['required',new Persian()],
            'technical.scientific_principles' => ['required',new Persian()],
            'technical.technical_features_product' => ['required',new Persian()],
            'technical.terms_and_conditions_of_work' => ['required',new Persian()],
            'technical.production_schedule' => ['required',new Persian()],
            'required_certificates.*.description' => ['required',new Persian()],
            'required_certificates.*.received' => ['required',new Security()],
            'required_certificates.*.type' => ['required',new Security()],
        ];
    }
}
