<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
            'number_of_plan_year' => ['numeric','max:10'],
            'dollar' => ['numeric'],
            'inflation' => ['numeric'],
            'loan' => ['numeric'],
            'profit' => ['numeric'],
            'reimbursement' => ['numeric'],
            'number_of_day_1' => ['numeric'],
            'number_of_day_2' => ['numeric'],
            'number_of_day_3' => ['numeric'],
            'number_of_day_4' => ['numeric'],
            'depreciation_rate_1' => ['numeric','max:100'],
            'depreciation_rate_2' => ['numeric','max:100'],
            'depreciation_rate_3' => ['numeric','max:100'],
            'depreciation_rate_4' => ['numeric','max:100'],
            'depreciation_rate_5' => ['numeric','max:100'],
            'depreciation_rate_6' => ['numeric','max:100'],
            'type' => [ new Security()],
//            'lands.*.description' => [],
            'lands.*.area' => ['numeric'],
            'lands.*.price' => ['numeric'],
//            'laboratory_equipments.*.description' => [],
            'laboratory_equipments.*.number' => ['numeric'],
            'laboratory_equipments.*.dollar_unit_price' => ['numeric'],
            'laboratory_equipments.*.toman_unit_price' => ['numeric'],
//            'officeequipmentandsupplies.*.description' => [],
            'officeequipmentandsupplies.*.count' => ['numeric'],
            'officeequipmentandsupplies.*.unit_price' => ['numeric'],
//            'facilities.*.description' => [],
            'facilities.*.count' => ['numeric'],
            'facilities.*.unit_price' => ['numeric'],
//            'transportations.*.description' => [],
            'transportations.*.count' => ['numeric'],
            'transportations.*.unit_price' => ['numeric'],
//            'equipmentandmachineries.*.description' => [],
            'equipmentandmachineries.*.count' => ['numeric'],
            'equipmentandmachineries.*.unit_price' => ['numeric'],
//            'preoperatingcosts.*.description' => [],
            'preoperatingcosts.*.total_price' => ['numeric'],
        ];
    }
}
