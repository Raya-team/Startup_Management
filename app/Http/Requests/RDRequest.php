<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RDRequest extends FormRequest
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
            'r_d.*.description' => ['required'],
            'r_d.*.annual_cost' => ['required'],
        ];
    }
}
