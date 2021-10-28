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
            'product_introduction' => ['required'],
            'product_features' => ['required'],
            'product_competitive_advantages' => ['required'],
            'position_analysis' => ['required'],
            'pricing_strategy' => ['required'],
            'marketing_strategy' => ['required'],
            'year' => ['required'],
            'general_request' => ['required'],
            'domestic_production' => ['required'],
            'importation' => ['required'],
            'unit' => ['required'],
            'customer_features' => ['required'],
            'first_group_customers' => ['required'],
            'second_group_customers' => ['required'],
            'third_group_customers' => ['required'],
            'fourth_group_customers' => ['required'],
            'material_suppliers_name' => ['required'],
            'material_suppliers_region' => ['required'],
            'producers_name' => ['required'],
            'producers_region' => ['required'],
            'suppliers_name' => ['required'],
            'suppliers_region' => ['required'],
            'retails_name' => ['required'],
            'retails_region' => ['required'],
            'economical' => ['required'],
            'social' => ['required'],
            'political' => ['required'],
            'environmental' => ['required'],
            'competitor_name' => ['required'],
            'competitors_region' => ['required'],
            'market_share' => ['required'],
            'competitive_feature' => ['required'],
            'weakness' => ['required'],
            'strengths_description' => ['required'],
            'strengths_weight' => ['required'],
            'strengths_Score' => ['required'],
            'weak_points_description' => ['required'],
            'weak_points_weight' => ['required'],
            'weak_points_Score' => ['required'],
            'opportunity_points_description' => ['required'],
            'opportunity_points_weight' => ['required'],
            'opportunity_points_Score' => ['required'],
            'threats_description' => ['required'],
            'threats_weight' => ['required'],
            'threats_Score' => ['required'],
        ];
    }
}
