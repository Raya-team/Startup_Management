<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValuationLaboratoryEquipmentRequest extends FormRequest
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
            'valuation_laboratory_equipments.*.description' => ['required'],
            'valuation_laboratory_equipments.*.number' => ['required'],
            'valuation_laboratory_equipments.*.owner' => ['required'],
            'valuation_laboratory_equipments.*.dollar_unit_price' => ['required'],
            'valuation_laboratory_equipments.*.toman_unit_price' => ['required'],
        ];
    }
}
