<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TangibleRequest extends FormRequest
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
            'tenement_description' => ['required'],
            'tenement_area' => ['required', 'numeric'],
            'tenement_owner' => ['required'],
            'tenement_total_price' => ['required', 'numeric'],
            'machinery_description' => ['required'],
            'machinery_number' => ['required', 'numeric'],
            'machinery_owner' => ['required'],
            'machinery_unit_price' => ['required', 'numeric'],
            'machinery_total_price' => ['required', 'numeric'],
            'office_description' => ['required'],
            'office_number' => ['required', 'numeric'],
            'office_owner' => ['required'],
            'office_unit_price' => ['required', 'numeric'],
            'office_total_price' => ['required', 'numeric'],
            'other_description' => ['required'],
            'other_owner' => ['required'],
            'other_total_price' => ['required', 'numeric'],
        ];
    }
}
