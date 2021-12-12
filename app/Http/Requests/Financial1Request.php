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
            'type' => ['required', new Security()],
            'lands.*.description' => ['required', new Persian()],
            'lands.*.area' => ['required','numeric'],
            'lands.*.price' => ['required','numeric'],
            'laboratory_equipments.*.description' => ['required', new Persian()],
            'laboratory_equipments.*.number' => ['required','numeric'],
            'laboratory_equipments.*.dollar_unit_price' => ['required','numeric'],
            'laboratory_equipments.*.toman_unit_price' => ['required','numeric'],
            'officeequipmentandsupplies.*.description' => ['required', new Persian()],
            'officeequipmentandsupplies.*.count' => ['required','numeric'],
            'officeequipmentandsupplies.*.unit_price' => ['required','numeric'],
            'facilities.*.description' => ['required', new Persian()],
            'facilities.*.count' => ['required','numeric'],
            'facilities.*.unit_price' => ['required','numeric'],
            'transportations.*.description' => ['required', new Persian()],
            'transportations.*.count' => ['required','numeric'],
            'transportations.*.unit_price' => ['required','numeric'],
            'equipmentandmachineries.*.description' => ['required', new Persian()],
            'equipmentandmachineries.*.count' => ['required','numeric'],
            'equipmentandmachineries.*.unit_price' => ['required','numeric'],
            'preoperatingcosts.*.description' => ['required', new Persian()],
            'preoperatingcosts.*.total_price' => ['required','numeric'],
        ];
    }
}
