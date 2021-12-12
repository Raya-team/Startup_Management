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
            'market.product_introduction' => ['required',new Persian()],
            'market.product_features' => ['required',new Persian()],
            'market.product_competitive_advantages' => ['required',new Persian()],
            'market.position_analysis' => ['required',new Persian()],
            'market.product_pricing_strategy' => ['required',new Persian()],
            'market.product_marketing_strategy' => ['required',new Persian()],
            'market.market_status' => ['required',new Persian()],
            'market.target_market' => ['required',new Persian()],
            'market.forecast_the_future_of_the_market' => ['required',new Persian()],
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
            'raw_material_suppliers.*.name' => ['required', 'min:3', 'max:16', new Persian()],
            'raw_material_suppliers.*.geographical_region' => ['required',new Security()],
            'producers.*.name' => ['required', 'min:3', 'max:16', new Persian()],
            'producers.*.geographical_region' => ['required',new Security()],
            'suppliers.*.name' => ['required', 'min:3', 'max:16', new Persian()],
            'suppliers.*.geographical_region' => ['required',new Security()],
            'retails.*.name' => ['required', 'min:3', 'max:16', new Persian()],
            'retails.*.geographical_region' => ['required',new Security()],
            'environmental_effect.economical' => ['required',new Persian()],
            'environmental_effect.social' => ['required',new Persian()],
            'environmental_effect.political' => ['required',new Persian()],
            'environmental_effect.environmental' => ['required',new Persian()],
            'product_competitors.*.name' =>['required', 'min:3', 'max:16', new Persian()],
            'product_competitors.*.geographical_region' => ['required',new Security()],
            'product_competitors.*.market_share' => ['required',new Security()],
            'product_competitors.*.competitive_feature' => ['required',new Security()],
            'product_competitors.*.weakness' => ['required',new Security()],
            'strengths.*.description' => ['required',new Persian()],
            'strengths.*.weight' => ['required','numeric'],
            'strengths.*.score' => ['required'],
            'weak_points.*.description' => ['required',new Persian()],
            'weak_points.*.weight' => ['required','numeric'],
            'weak_points.*.score' => ['required','numeric'],
            'opportunity_points.*.description' => ['required',new Persian()],
            'opportunity_points.*.weight' => ['required','numeric'],
            'opportunity_points.*.score' => ['required','numeric'],
            'threats.*.description' => ['required',new Persian()],
            'threats.*.weight' => ['required','numeric'],
            'threats.*.score' => ['required','numeric'],
            'alternative_products.*.product_title' => ['required', 'min:3', 'max:32', new Persian()],
            'alternative_products.*.description' => ['required',new Persian()],
        ];
    }
}
