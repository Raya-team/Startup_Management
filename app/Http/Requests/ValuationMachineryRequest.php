<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
            'valuation_machineries.*.description' => ['required', new Security()],
            'valuation_machineries.*.number' => ['required','numeric'],
            'valuation_machineries.*.owner' => ['required', new Security()],
            'valuation_machineries.*.unit_price' => ['required','numeric'],
        ];
    }
}
