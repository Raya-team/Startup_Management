<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
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
                'development_cost.description' => ['required', new Persian()],
                'development_cost.total_cost' => ['required','numeric'],

                'capacity.nominal_capacity' => ['required','numeric'],
                'capacity.unit' => ['required', new Security()],
                'capacity.percent' => ['required','numeric'],
                'capacity.total_production' => ['required','numeric'],

                'raw_material.*.product_name' =>['required'],
                'raw_material.*.name' =>['required'],
                'raw_material.*.unit' => ['required', new Security()],
                'raw_material.*.unit_price' => ['required','numeric'],
                'raw_material.*.consumption' => ['required','numeric'],

                'man_power.*.name' => ['required'],
                'man_power.*.manpower_type' => ['required'],
                'man_power.*.number' => ['required','numeric'],
                'man_power.*.salary' => ['required','numeric'],

                'rent.*.description' => ['required', new Persian()],
                'rent.*.area' => ['required','numeric'],
                'rent.*.monthly_rent' => ['required','numeric'],

                'energy_consumption.*.description' => ['required', new Persian()],
                'energy_consumption.*.unit' => ['required', new Security()],
                'energy_consumption.*.annual_consumption' => ['required','numeric'],
                'energy_consumption.*.unit_cost' =>['required','numeric'],

                'r_d.*.description' => ['required', new Persian()],
                'r_d.*.annual_cost' => ['required','numeric'],

                'business.*.description' => ['required', new Persian()],
                'business.*.annual_cost' => ['required','numeric'],

                'insurance.*.description' => ['required', new Persian()],
                'insurance.*.total_cost' => ['required','numeric'],

                'repair.*.description' => ['required', new Persian()],
                'repair.*.percent' => ['required','numeric'],

                'transportation_cost.*.description' => ['required', new Persian()],
                'transportation_cost.*.number' => ['required','numeric'],
                'transportation_cost.*.unit_cost' => ['required','numeric'],

                'warranty.*.product_name' => ['required'],
                'warranty.*.percent' => ['required','numeric'],

                'consumer_item.*.description' => ['required', new Persian()],
                'consumer_item.*.number' => ['required','numeric'],
                'consumer_item.*.unit_cost' => ['required','numeric'],

                'after_sale_service.*.description' => ['required', new Persian()],
                'after_sale_service.*.number' => ['required','numeric'],
                'after_sale_service.*.unit_cost' => ['required','numeric'],

                'outsourcing.*.description' => ['required', new Persian()],
                'outsourcing.*.number' => ['required','numeric'],
                'outsourcing.*.unit_cost' => ['required','numeric'],

                'other_information.sale_price' => ['required','numeric'],
                'other_information.tax_rate' => ['required','numeric'],
            ];
        }else{
            return [
                'capacity.nominal_capacity' => ['required','numeric'],
                'capacity.unit' => ['required', new Security()],
                'capacity.percent' => ['required','numeric'],
                'capacity.total_production' => ['required','numeric'],

                'raw_material.*.product_name' =>['required'],
                'raw_material.*.name' =>['required'],
                'raw_material.*.unit' => ['required', new Security()],
                'raw_material.*.unit_price' => ['required','numeric'],
                'raw_material.*.consumption' => ['required','numeric'],

                'man_power.*.name' => ['required'],
                'man_power.*.manpower_type' => ['required'],
                'man_power.*.number' => ['required','numeric'],
                'man_power.*.salary' => ['required','numeric'],

                'rent.*.description' => ['required', new Persian()],
                'rent.*.area' => ['required','numeric'],
                'rent.*.monthly_rent' => ['required','numeric'],

                'energy_consumption.*.description' => ['required', new Persian()],
                'energy_consumption.*.unit' => ['required', new Security()],
                'energy_consumption.*.annual_consumption' => ['required','numeric'],
                'energy_consumption.*.unit_cost' =>['required','numeric'],

                'r_d.*.description' => ['required', new Persian()],
                'r_d.*.annual_cost' => ['required','numeric'],

                'business.*.description' => ['required', new Persian()],
                'business.*.annual_cost' => ['required','numeric'],

                'insurance.*.description' => ['required', new Persian()],
                'insurance.*.total_cost' => ['required','numeric'],

                'repair.*.description' => ['required', new Persian()],
                'repair.*.percent' => ['required','numeric'],

                'transportation_cost.*.description' => ['required', new Persian()],
                'transportation_cost.*.number' => ['required','numeric'],
                'transportation_cost.*.unit_cost' => ['required','numeric'],

                'warranty.*.product_name' => ['required'],
                'warranty.*.percent' => ['required','numeric'],

                'consumer_item.*.description' => ['required', new Persian()],
                'consumer_item.*.number' => ['required','numeric'],
                'consumer_item.*.unit_cost' => ['required','numeric'],

                'after_sale_service.*.description' => ['required', new Persian()],
                'after_sale_service.*.number' => ['required','numeric'],
                'after_sale_service.*.unit_cost' => ['required','numeric'],

                'outsourcing.*.description' => ['required', new Persian()],
                'outsourcing.*.number' => ['required','numeric'],
                'outsourcing.*.unit_cost' => ['required','numeric'],

                'other_information.sale_price' => ['required','numeric'],
                'other_information.tax_rate' => ['required','numeric'],
            ];
        }
    }
}
