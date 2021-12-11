<?php

namespace App\Http\Requests;

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
            'product_supplies.*.year' => ['required'],
            'product_supplies.*.general_request' => ['required'],
            'product_supplies.*.domestic_production' => ['required'],
            'product_supplies.*.importation' => ['required'],
            'product_supplies.*.unit_id' => ['required'],
            'product_customers.*.customer_features' => ['required'],
            'product_customers.*.first_group_customers' => ['required'],
            'product_customers.*.second_group_customers' => ['required'],
            'product_customers.*.third_group_customers' => ['required'],
            'product_customers.*.fourth_group_customers' => ['required'],
            'raw_material_suppliers.*.name' => ['required'],
            'raw_material_suppliers.*.geographical_region' => ['required'],
            'producers.*.name' => ['required'],
            'producers.*.geographical_region' => ['required'],
            'suppliers.*.name' => ['required'],
            'suppliers.*.geographical_region' => ['required'],
            'retails.*.name' => ['required'],
            'retails.*.geographical_region' => ['required'],
            'environmental_effect.economical' => ['required'],
            'environmental_effect.social' => ['required'],
            'environmental_effect.political' => ['required'],
            'environmental_effect.environmental' => ['required'],
            'product_competitors.*.name' => ['required'],
            'product_competitors.*.geographical_region' => ['required'],
            'product_competitors.*.market_share' => ['required'],
            'product_competitors.*.competitive_feature' => ['required'],
            'product_competitors.*.weakness' => ['required'],
            'strengths.*.description' => ['required'],
            'strengths.*.weight' => ['required'],
            'strengths.*.score' => ['required'],
            'weak_points.*.description' => ['required'],
            'weak_points.*.weight' => ['required'],
            'weak_points.*.score' => ['required'],
            'opportunity_points.*.description' => ['required'],
            'opportunity_points.*.weight' => ['required'],
            'opportunity_points.*.score' => ['required'],
            'threats.*.description' => ['required'],
            'threats.*.weight' => ['required'],
            'threats.*.score' => ['required'],
            'alternative_products.*.product_title' => ['required'],
            'alternative_products.*.description' => ['required'],
        ];
    }
}
