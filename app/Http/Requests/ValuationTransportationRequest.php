<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
            'valuation_transportations.*.description' => ['required', new Security()],
            'valuation_transportations.*.number' => ['required','numeric'],
            'valuation_transportations.*.owner' => ['required', new Security()],
            'valuation_transportations.*.unit_price' => ['required','numeric'],
        ];
    }
}
