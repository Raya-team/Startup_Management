<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
            'valuation_facilities.*.description' => ['required', new Security()],
            'valuation_facilities.*.number' => ['required','numeric'],
            'valuation_facilities.*.owner' => ['required', new Security()],
            'valuation_facilities.*.unit_price' => ['required','numeric'],
        ];
    }
}
