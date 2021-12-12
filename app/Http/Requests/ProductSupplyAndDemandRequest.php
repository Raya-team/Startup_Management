<?php

namespace App\Http\Requests;

use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class ProductSupplyAndDemandRequest extends FormRequest
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
            'product_supplies.*.year' => ['required','numeric'],
            'product_supplies.*.general_request' => ['required',new Security()],
            'product_supplies.*.domestic_production' => ['required',new Security()],
            'product_supplies.*.importation' => ['required',new Security()],
            'product_supplies.*.unit_id' => ['required',new Security()],
        ];
    }
}
