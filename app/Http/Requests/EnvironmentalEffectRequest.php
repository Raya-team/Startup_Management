<?php

namespace App\Http\Requests;

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
            'environmental_effect.economical' => ['required'],
            'environmental_effect.social' => ['required'],
            'environmental_effect.political' => ['required'],
            'environmental_effect.environmental' => ['required'],
        ];
    }
}
