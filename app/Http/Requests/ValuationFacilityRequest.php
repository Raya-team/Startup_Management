<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValuationFacilityRequest extends FormRequest
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
            'valuation_facilities.*.description' => ['required'],
            'valuation_facilities.*.number' => ['required'],
            'valuation_facilities.*.owner' => ['required'],
            'valuation_facilities.*.unit_price' => ['required'],
        ];
    }
}
