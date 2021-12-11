<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValuationTransportationRequest extends FormRequest
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
            'valuation_transportations.*.description' => ['required'],
            'valuation_transportations.*.number' => ['required'],
            'valuation_transportations.*.owner' => ['required'],
            'valuation_transportations.*.unit_price' => ['required'],
        ];
    }
}
