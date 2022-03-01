<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class ProductCompetitorRequest extends FormRequest
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
            'product_competitors.*.name' =>['required', 'min:3', 'max:16'],
            'product_competitors.*.geographical_region' => ['required',new Security()],
            'product_competitors.*.market_share' => ['required',new Security()],
            'product_competitors.*.competitive_feature' => ['required',new Security()],
            'product_competitors.*.weakness' => ['required',new Security()],
        ];
    }
}
