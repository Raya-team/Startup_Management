<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TangibleEditRequest extends FormRequest
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
            'tenements.description' => ['required'],
            'tenements.area' => ['required', 'numeric'],
            'tenements.owner' => ['required'],
            'tenements.total_price' => ['required', 'numeric'],
            'machineries.description' => ['required'],
            'machineries.number' => ['required', 'numeric'],
            'machineries.owner' => ['required'],
            'machineries.unit_price' => ['required', 'numeric'],
            'machineries.total_price' => ['required', 'numeric'],
            'offices.description' => ['required'],
            'offices.number' => ['required', 'numeric'],
            'offices.owner' => ['required'],
            'offices.unit_price' => ['required', 'numeric'],
            'offices.total_price' => ['required', 'numeric'],
            'others.description' => ['required'],
            'others.owner' => ['required'],
            'others.total_price' => ['required', 'numeric'],
        ];
    }
}
