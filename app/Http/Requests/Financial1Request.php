<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Financial1Request extends FormRequest
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
            'number_of_plan_year' => ['required'],
            'dollar' => ['required'],
            'inflation' => ['required'],
            'loan' => ['required'],
            'profit' => ['required'],
            'reimbursement' => ['required'],
            'number_of_day_1' => ['required'],
            'number_of_day_2' => ['required'],
            'number_of_day_3' => ['required'],
            'number_of_day_4' => ['required'],
            'depreciation_rate_1' => ['required'],
            'depreciation_rate_2' => ['required'],
            'depreciation_rate_3' => ['required'],
            'depreciation_rate_4' => ['required'],
            'depreciation_rate_5' => ['required'],
            'type' => ['required'],
            'lands.*.description' => ['required'],
            'lands.*.area' => ['required'],
            'lands.*.price' => ['required'],
            'laboratory_equipments.*.description' => ['required'],
            'laboratory_equipments.*.number' => ['required'],
            'laboratory_equipments.*.dollar_unit_price' => ['required'],
            'laboratory_equipments.*.toman_unit_price' => ['required'],
            'officeequipmentandsupplies.*.description' => ['required'],
            'officeequipmentandsupplies.*.count' => ['required'],
            'officeequipmentandsupplies.*.unit_price' => ['required'],
            'facilities.*.description' => ['required'],
            'facilities.*.count' => ['required'],
            'facilities.*.unit_price' => ['required'],
            'transportations.*.description' => ['required'],
            'transportations.*.count' => ['required'],
            'transportations.*.unit_price' => ['required'],
            'equipmentandmachineries.*.description' => ['required'],
            'equipmentandmachineries.*.count' => ['required'],
            'equipmentandmachineries.*.unit_price' => ['required'],
            'preoperatingcosts.*.description' => ['required'],
            'preoperatingcosts.*.total_price' => ['required'],
        ];
    }
}
