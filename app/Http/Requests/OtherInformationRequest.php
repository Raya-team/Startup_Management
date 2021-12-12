<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OtherInformationRequest extends FormRequest
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
            'sale_price' => ['required','numeric'],
            'tax_rate' => ['required','numeric'],
        ];
    }

    public function attributes()
    {
        return [
            'sale_price' => 'قیمت فروش',
            'tax_rate' => 'میزان مالیات',
        ];
    }
}
