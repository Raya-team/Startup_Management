<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class DevelopmentCostRequest extends FormRequest
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
            'description' => ['required'],
            'total_cost' => ['required','numeric'],
        ];
    }

    public function attributes()
    {
        return [
            'description' => 'شرح',
            'total_cost' => 'هزینه کل',
        ];
    }
}
