<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessCanvasRequest extends FormRequest
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
            'key_partners' => ['required'],
            'main_activities' => ['required'],
            'main_sources' => ['required'],
            'cost_structure' => ['required'],
            'suggested_value' => ['required'],
            'communication_with_clients' => ['required'],
            'distribution_channels' => ['required'],
            'customer_section' => ['required'],
            'income_flow' => ['required']
        ];
    }
}
