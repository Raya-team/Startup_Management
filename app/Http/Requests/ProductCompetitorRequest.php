<?php

namespace App\Http\Requests;

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
            'product_competitors.*.name' => ['required'],
            'product_competitors.*.geographical_region' => ['required'],
            'product_competitors.*.market_share' => ['required'],
            'product_competitors.*.competitive_feature' => ['required'],
            'product_competitors.*.weakness' => ['required'],
        ];
    }
}
