<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class TangibleRequest extends FormRequest
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
            'valuation_tenements.*.description' => ['required', new Security()],
            'valuation_tenements.*.area' => ['required','numeric'],
            'valuation_tenements.*.owner' => ['required', new Security()],
            'valuation_tenements.*.total_price' => ['required','numeric'],
            'valuation_laboratory_equipments.*.description' => ['required', new Security()],
            'valuation_laboratory_equipments.*.number' => ['required','numeric'],
            'valuation_laboratory_equipments.*.owner' => ['required', new Security()],
            'valuation_laboratory_equipments.*.dollar_unit_price' => ['required','numeric'],
            'valuation_laboratory_equipments.*.toman_unit_price' => ['required','numeric'],
            'valuation_machineries.*.description' => ['required', new Security()],
            'valuation_machineries.*.number' => ['required','numeric'],
            'valuation_machineries.*.owner' => ['required', new Security()],
            'valuation_machineries.*.unit_price' => ['required','numeric'],
            'valuation_office_supplies.*.description' => ['required', new Security()],
            'valuation_office_supplies.*.number' => ['required','numeric'],
            'valuation_office_supplies.*.owner' => ['required', new Security()],
            'valuation_office_supplies.*.unit_price' => ['required','numeric'],
            'valuation_facilities.*.description' => ['required', new Security()],
            'valuation_facilities.*.number' => ['required','numeric'],
            'valuation_facilities.*.owner' => ['required', new Security()],
            'valuation_facilities.*.unit_price' => ['required','numeric'],
            'valuation_transportations.*.description' => ['required', new Security()],
            'valuation_transportations.*.number' => ['required','numeric'],
            'valuation_transportations.*.owner' => ['required', new Security()],
            'valuation_transportations.*.unit_price' => ['required','numeric'],
            'valuation_pre_operation_costs.*.description' => ['required', new Security()],
            'valuation_pre_operation_costs.*.owner' => ['required', new Security()],
            'valuation_pre_operation_costs.*.total_price' => ['required','numeric'],
        ];
    }
}
