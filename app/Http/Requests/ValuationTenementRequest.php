<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValuationTenementRequest extends FormRequest
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
        ];
    }
}
