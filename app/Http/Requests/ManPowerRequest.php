<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class ManPowerRequest extends FormRequest
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
            'man_power.*.name' => ['required'],
            'man_power.*.manpower_type' => ['required'],
            'man_power.*.number' => ['required','numeric'],
            'man_power.*.salary' => ['required','numeric'],
        ];
    }
}
