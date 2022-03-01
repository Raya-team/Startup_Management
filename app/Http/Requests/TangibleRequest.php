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
            'valuation_tenements.*.description' => [ new Security()],
            'valuation_tenements.*.area' => ['numeric'],
            'valuation_tenements.*.owner' => [new Security()],
            'valuation_tenements.*.total_price' => ['numeric'],
            'valuation_laboratory_equipments.*.description' => [new Security()],
            'valuation_laboratory_equipments.*.number' => ['numeric'],
            'valuation_laboratory_equipments.*.owner' => [new Security()],
            'valuation_laboratory_equipments.*.dollar_unit_price' => ['numeric'],
            'valuation_laboratory_equipments.*.toman_unit_price' => ['numeric'],
            'valuation_machineries.*.description' => [new Security()],
            'valuation_machineries.*.number' => ['numeric'],
            'valuation_machineries.*.owner' => [new Security()],
            'valuation_machineries.*.unit_price' => ['numeric'],
            'valuation_office_supplies.*.description' => [new Security()],
            'valuation_office_supplies.*.number' => ['numeric'],
            'valuation_office_supplies.*.owner' => [new Security()],
            'valuation_office_supplies.*.unit_price' => ['numeric'],
            'valuation_facilities.*.description' => [new Security()],
            'valuation_facilities.*.number' => ['numeric'],
            'valuation_facilities.*.owner' => [new Security()],
            'valuation_facilities.*.unit_price' => ['numeric'],
            'valuation_transportations.*.description' => [new Security()],
            'valuation_transportations.*.number' => ['numeric'],
            'valuation_transportations.*.owner' => [new Security()],
            'valuation_transportations.*.unit_price' => ['numeric'],
            'valuation_pre_operation_costs.*.description' => [new Security()],
            'valuation_pre_operation_costs.*.owner' => [new Security()],
            'valuation_pre_operation_costs.*.total_price' => ['numeric'],
        ];
    }
}
