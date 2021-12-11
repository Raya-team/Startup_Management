<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValuationPreOperationCostRequest extends FormRequest
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
            'valuation_pre_operation_costs.*.description' => ['required'],
            'valuation_pre_operation_costs.*.owner' => ['required'],
            'valuation_pre_operation_costs.*.total_price' => ['required'],
        ];
    }
}
