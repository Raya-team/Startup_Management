<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class DesMarketRequest extends FormRequest
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
            'product_supplies.*.year' => ['required','numeric'],
            'product_supplies.*.general_request' => ['required',new Security()],
            'product_supplies.*.domestic_production' => ['required',new Security()],
            'product_supplies.*.importation' => ['required',new Security()],
            'product_supplies.*.unit_id' => ['required',new Security()],
            'product_customers.*.customer_features' => ['required',new Security()],
            'product_customers.*.first_group_customers' => ['required',new Security()],
            'product_customers.*.second_group_customers' => ['required',new Security()],
            'product_customers.*.third_group_customers' => ['required',new Security()],
            'product_customers.*.fourth_group_customers' => ['required',new Security()],
            'raw_material_suppliers.*.name' => ['required', 'min:3', 'max:16'],
            'raw_material_suppliers.*.geographical_region' => ['required',new Security()],
            'producers.*.name' => ['required', 'min:3', 'max:16'],
            'producers.*.geographical_region' => ['required',new Security()],
            'suppliers.*.name' => ['required', 'min:3', 'max:16'],
            'suppliers.*.geographical_region' => ['required',new Security()],
            'retails.*.name' => ['required', 'min:3', 'max:16'],
            'retails.*.geographical_region' => ['required',new Security()],
            'environmental_effect.economical' => ['required'],
            'environmental_effect.social' => ['required'],
            'environmental_effect.political' => ['required'],
            'environmental_effect.environmental' => ['required'],
            'product_competitors.*.name' =>['required', 'min:3', 'max:16'],
            'product_competitors.*.geographical_region' => ['required',new Security()],
            'product_competitors.*.market_share' => ['required',new Security()],
            'product_competitors.*.competitive_feature' => ['required',new Security()],
            'product_competitors.*.weakness' => ['required',new Security()],
            'strengths.*.description' => ['required'],
            'strengths.*.weight' => ['required','numeric'],
            'strengths.*.score' => ['required'],
            'weak_points.*.description' => ['required'],
            'weak_points.*.weight' => ['required','numeric'],
            'weak_points.*.score' => ['required','numeric'],
            'opportunity_points.*.description' => ['required'],
            'opportunity_points.*.weight' => ['required','numeric'],
            'opportunity_points.*.score' => ['required','numeric'],
            'threats.*.description' => ['required'],
            'threats.*.weight' => ['required','numeric'],
            'threats.*.score' => ['required','numeric'],
            'alternative_products.*.product_title' => ['required', 'min:3', 'max:32'],
            'alternative_products.*.description' => ['required'],
        ];
    }
}
