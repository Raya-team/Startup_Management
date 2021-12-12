<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
            'valuation_tenements.*.description' => ['required', new Security()],
            'valuation_tenements.*.area' => ['required','numeric'],
            'valuation_tenements.*.owner' => ['required', new Security()],
            'valuation_tenements.*.total_price' => ['required','numeric'],
        ];
    }
}
