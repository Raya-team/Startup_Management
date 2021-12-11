<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnergyConsumptionRequest extends FormRequest
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
            'energy_consumption.*.description' => ['required'],
            'energy_consumption.*.unit' => ['required'],
            'energy_consumption.*.annual_consumption' => ['required'],
            'energy_consumption.*.unit_cost' => ['required'],
        ];
    }
}
