<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class AfterSaleServiceRequest extends FormRequest
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
            'after_sale_service.*.description' => ['required'],
            'after_sale_service.*.number' => ['required','numeric'],
            'after_sale_service.*.unit_cost' => ['required','numeric'],
        ];
    }
}
