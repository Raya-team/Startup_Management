<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RawMaterialRequest extends FormRequest
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
            'raw_material.*.description' => ['required'],
            'raw_material.*.unit' => ['required'],
            'raw_material.*.unit_price' => ['required'],
            'raw_material.*.consumption' => ['required'],
        ];
    }
}