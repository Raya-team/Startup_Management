<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValuationMachineryRequest extends FormRequest
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
            'valuation_machineries.*.description' => ['required'],
            'valuation_machineries.*.number' => ['required'],
            'valuation_machineries.*.owner' => ['required'],
            'valuation_machineries.*.unit_price' => ['required'],
        ];
    }
}
