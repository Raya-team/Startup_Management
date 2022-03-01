<?php

namespace App\Http\Requests;

use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class CapacityRequest extends FormRequest
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
            'nominal_capacity' => ['required','numeric'],
            'unit' => ['required', new Security()],
            'percent' => ['required','numeric'],
        ];
    }

    public function attributes()
    {
        return [
            'nominal_capacity' => 'ظرفیت اسمی',
            'unit' => 'واحد',
            'percent' => 'درصد',
        ];
    }
}
