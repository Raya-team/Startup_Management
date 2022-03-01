<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class LaboratoryEquipmentRequest extends FormRequest
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
            'laboratory_equipments.*.description' => ['required'],
            'laboratory_equipments.*.number' => ['required','numeric'],
            'laboratory_equipments.*.dollar_unit_price' => ['required','numeric'],
            'laboratory_equipments.*.toman_unit_price' => ['required','numeric'],
        ];
    }
}
