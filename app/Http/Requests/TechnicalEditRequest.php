<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnicalEditRequest extends FormRequest
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
            'technical.product_introduction' => ['required'],
            'technical.technical_specifications' => ['required'],
            'technical.scientific_principles' => ['required'],
            'technical.technical_features_product' => ['required'],
            'technical.terms_and_conditions_of_work' => ['required'],
            'technical.production_schedule' => ['required'],
        ];
    }
}
