<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipmentAndMachineryRequest extends FormRequest
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
            'equipmentandmachineries.*.description' => ['required'],
            'equipmentandmachineries.*.count' => ['required', 'numeric'],
            'equipmentandmachineries.*.unit_price' => ['required', 'numeric'],
        ];
    }
}
