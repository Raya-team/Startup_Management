<?php

namespace App\Http\Requests;

use App\Rules\Persian;
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
            'key_partners' => ['required',new Persian()],
            'main_activities' => ['required',new Persian()],
            'main_sources' => ['required',new Persian()],
            'cost_structure' => ['required',new Persian()],
            'suggested_value' => ['required',new Persian()],
            'communication_with_clients' => ['required',new Persian()],
            'distribution_channels' => ['required',new Persian()],
            'customer_section' => ['required',new Persian()],
            'income_flow' => ['required',new Persian()],
        ];
    }
}
