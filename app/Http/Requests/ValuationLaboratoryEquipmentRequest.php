<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
            'valuation_laboratory_equipments.*.description' => ['required', new Security()],
            'valuation_laboratory_equipments.*.number' => ['required','numeric'],
            'valuation_laboratory_equipments.*.owner' => ['required', new Security()],
            'valuation_laboratory_equipments.*.dollar_unit_price' => ['required','numeric'],
            'valuation_laboratory_equipments.*.toman_unit_price' => ['required','numeric'],
        ];
    }
}
