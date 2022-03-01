<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class TransportationCostRequest extends FormRequest
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
            'transportation_cost.*.description' => ['required'],
            'transportation_cost.*.number' => ['required','numeric'],
            'transportation_cost.*.unit_cost' => ['required','numeric'],
        ];
    }
}
