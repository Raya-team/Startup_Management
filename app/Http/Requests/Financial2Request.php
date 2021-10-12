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
        return [
            'dev_description' => ['required'],
            'dev_cost' => ['required'],
            'nominal_capacity' => ['required'],
            'capacity_unit' => ['required'],
            'capacity_percent' => ['required'],
            'total_production' => ['required'],
            'production_unit' => ['required'],
            'materials_description' => ['required'],
            'materials_consumption' => ['required'],
            'materials_unit' =>['required'],
            'materials_unit_price' =>['required'],
            'materials_total_price' => ['required'],
            'powers_description' => ['required'],
            'powers_number' => ['required'],
            'powers_salary' => ['required'],
            'powers_total_rights' => ['required'],
            'rents_description' => ['required'],
            'area' => ['required'],
            'monthly_rent' =>['required'],
            'total_rent' => ['required'],
            'energy_description' => ['required'],
            'energy_unit' => ['required'],
            'annual_consumption' => ['required'],
            'energy_unit_cost' => ['required'],
            'energy_annual_cost' => ['required'],
            'rd_description' => ['required'],
            'rd_annual_cost' =>['required'],
            'businesses_description' => ['required'],
            'businesses_annual_cost' => ['required'],
            'insurances_description' => ['required'],
            'insurances_percent' => ['required'],
            'insurances_total_cost' => ['required'],
            'repairs_description' => ['required'],
            'repairs_percent' => ['required'],
            'repairs_total_cost' => ['required'],
            'transportation_description' => ['required'],
            'transportation_number' => ['required'],
            'transportation_unit_cost' => ['required'],
            'transportation_total_cost' => ['required'],
            'warranties_description' => ['required'],
            'warranties_percent' => ['required'],
            'warranties_total_cost' => ['required'],
            'consumer_description' => ['required'],
            'consumer_number' => ['required'],
            'consumer_unit_cost' => ['required'],
            'consumer_total_cost' => ['required'],
            'sale_services_description' => ['required'],
            'sale_services_number' => ['required'],
            'sale_services_unit_cost' => ['required'],
            'sale_services_total_cost' => ['required'],
            'sale_price' => ['required'],
            'tax_rate' => ['required'],
        ];
    }
}
