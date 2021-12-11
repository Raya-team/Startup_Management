<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesMarketEditRequest extends FormRequest
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
            'market.product_introduction' => ['required'],
            'market.product_features' => ['required'],
            'market.product_competitive_advantages' => ['required'],
            'market.position_analysis' => ['required'],
            'market.product_pricing_strategy' => ['required'],
            'market.product_marketing_strategy' => ['required'],
            'market.market_status' => ['required'],
            'market.target_market' => ['required'],
            'market.forecast_the_future_of_the_market' => ['required'],
        ];
    }
}
