<?php

namespace App\Http\Requests;

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
            'valuation_tenements.*.description' => ['required'],
            'valuation_tenements.*.area' => ['required'],
            'valuation_tenements.*.owner' => ['required'],
            'valuation_tenements.*.total_price' => ['required'],
            'valuation_laboratory_equipments.*.description' => ['required'],
            'valuation_laboratory_equipments.*.number' => ['required'],
            'valuation_laboratory_equipments.*.owner' => ['required'],
            'valuation_laboratory_equipments.*.dollar_unit_price' => ['required'],
            'valuation_laboratory_equipments.*.toman_unit_price' => ['required'],
            'valuation_machineries.*.description' => ['required'],
            'valuation_machineries.*.number' => ['required'],
            'valuation_machineries.*.owner' => ['required'],
            'valuation_machineries.*.unit_price' => ['required'],
            'valuation_office_supplies.*.description' => ['required'],
            'valuation_office_supplies.*.number' => ['required'],
            'valuation_office_supplies.*.owner' => ['required'],
            'valuation_office_supplies.*.unit_price' => ['required'],
            'valuation_facilities.*.description' => ['required'],
            'valuation_facilities.*.number' => ['required'],
            'valuation_facilities.*.owner' => ['required'],
            'valuation_facilities.*.unit_price' => ['required'],
            'valuation_transportations.*.description' => ['required'],
            'valuation_transportations.*.number' => ['required'],
            'valuation_transportations.*.owner' => ['required'],
            'valuation_transportations.*.unit_price' => ['required'],
            'valuation_pre_operation_costs.*.description' => ['required'],
            'valuation_pre_operation_costs.*.owner' => ['required'],
            'valuation_pre_operation_costs.*.total_price' => ['required'],
        ];
    }
}
