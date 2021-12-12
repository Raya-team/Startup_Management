<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class ValuationOfficeSupplyRequest extends FormRequest
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
            'valuation_office_supplies.*.description' => ['required', new Security()],
            'valuation_office_supplies.*.number' => ['required','numeric'],
            'valuation_office_supplies.*.owner' => ['required', new Security()],
            'valuation_office_supplies.*.unit_price' => ['required','numeric'],
        ];
    }
}
