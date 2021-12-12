<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class EnvironmentalEffectRequest extends FormRequest
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
            'environmental_effect.economical' => ['required',new Persian()],
            'environmental_effect.social' => ['required',new Persian()],
            'environmental_effect.political' => ['required',new Persian()],
            'environmental_effect.environmental' => ['required',new Persian()],
        ];
    }
}
