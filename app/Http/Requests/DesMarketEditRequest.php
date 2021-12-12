<?php

namespace App\Http\Requests;

use App\Rules\Persian;
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
            'market.product_introduction' => ['required',new Persian()],
            'market.product_features' => ['required',new Persian()],
            'market.product_competitive_advantages' => ['required',new Persian()],
            'market.position_analysis' => ['required',new Persian()],
            'market.product_pricing_strategy' => ['required',new Persian()],
            'market.product_marketing_strategy' => ['required',new Persian()],
            'market.market_status' => ['required',new Persian()],
            'market.target_market' => ['required',new Persian()],
            'market.forecast_the_future_of_the_market' => ['required',new Persian()],
        ];
    }
}
