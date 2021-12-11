<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Financial2Request extends FormRequest
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
        if($this->request->get('year') > 1){
            return [
                'development_cost.description' => ['required'],
                'development_cost.total_cost' => ['required'],
                'capacity.nominal_capacity' => ['required'],
                'capacity.unit' => ['required'],
                'capacity.percent' => ['required'],
                'capacity.total_production' => ['required'],
                'raw_material.*.description' => ['required'],
                'raw_material.*.unit' => ['required'],
                'raw_material.*.unit_price' => ['required'],
                'raw_material.*.consumption' => ['required'],
                'man_power.*.description' => ['required'],
                'man_power.*.number' => ['required'],
                'man_power.*.salary' => ['required'],
                'rent.*.salary' => ['required'],
                'rent.*.description' => ['required'],
                'rent.*.area' => ['required'],
                'rent.*.monthly_rent' => ['required'],
                'energy_consumption.*.description' => ['required'],
                'energy_consumption.*.unit' => ['required'],
                'energy_consumption.*.annual_consumption' => ['required'],
                'energy_consumption.*.unit_cost' => ['required'],
                'r_d.*.description' => ['required'],
                'r_d.*.annual_cost' => ['required'],
                'business.*.description' => ['required'],
                'business.*.annual_cost' => ['required'],
                'insurance.*.description' => ['required'],
                'insurance.*.percent' => ['required'],
                'insurance.*.total_cost' => ['required'],
                'repair.*.description' => ['required'],
                'repair.*.percent' => ['required'],
                'transportation_cost.*.description' => ['required'],
                'transportation_cost.*.number' => ['required'],
                'transportation_cost.*.unit_cost' => ['required'],
                'warranty.*.description' => ['required'],
                'warranty.*.percent' => ['required'],
                'warranty.*.total_cost' => ['required'],
                'consumer_item.*.description' => ['required'],
                'consumer_item.*.number' => ['required'],
                'consumer_item.*.unit_cost' => ['required'],
                'after_sale_service.*.description' => ['required'],
                'after_sale_service.*.number' => ['required'],
                'after_sale_service.*.unit_cost' => ['required'],
                'outsourcing.*.description' => ['required'],
                'outsourcing.*.number' => ['required'],
                'outsourcing.*.unit_cost' => ['required'],
                'other_information.sale_price' => ['required'],
                'other_information.tax_rate' => ['required'],
            ];
        }else{
            return [
                'capacity.nominal_capacity' => ['required'],
                'capacity.unit' => ['required'],
                'capacity.percent' => ['required'],
                'capacity.total_production' => ['required'],
                'raw_material.*.description' => ['required'],
                'raw_material.*.unit' => ['required'],
                'raw_material.*.unit_price' => ['required'],
                'raw_material.*.consumption' => ['required'],
                'man_power.*.description' => ['required'],
                'man_power.*.number' => ['required'],
                'man_power.*.salary' => ['required'],
                'rent.*.salary' => ['required'],
                'rent.*.description' => ['required'],
                'rent.*.area' => ['required'],
                'rent.*.monthly_rent' => ['required'],
                'energy_consumption.*.description' => ['required'],
                'energy_consumption.*.unit' => ['required'],
                'energy_consumption.*.annual_consumption' => ['required'],
                'energy_consumption.*.unit_cost' => ['required'],
                'r_d.*.description' => ['required'],
                'r_d.*.annual_cost' => ['required'],
                'business.*.description' => ['required'],
                'business.*.annual_cost' => ['required'],
                'insurance.*.description' => ['required'],
                'insurance.*.percent' => ['required'],
                'insurance.*.total_cost' => ['required'],
                'repair.*.description' => ['required'],
                'repair.*.percent' => ['required'],
                'transportation_cost.*.description' => ['required'],
                'transportation_cost.*.number' => ['required'],
                'transportation_cost.*.unit_cost' => ['required'],
                'warranty.*.description' => ['required'],
                'warranty.*.percent' => ['required'],
                'warranty.*.total_cost' => ['required'],
                'consumer_item.*.description' => ['required'],
                'consumer_item.*.number' => ['required'],
                'consumer_item.*.unit_cost' => ['required'],
                'after_sale_service.*.description' => ['required'],
                'after_sale_service.*.number' => ['required'],
                'after_sale_service.*.unit_cost' => ['required'],
                'outsourcing.*.description' => ['required'],
                'outsourcing.*.number' => ['required'],
                'outsourcing.*.unit_cost' => ['required'],
                'other_information.sale_price' => ['required'],
                'other_information.tax_rate' => ['required'],
            ];
        }
    }
}
