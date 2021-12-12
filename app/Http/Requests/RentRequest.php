<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class RentRequest extends FormRequest
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
            'rent.*.description' => ['required', new Persian()],
            'rent.*.area' => ['required','numeric'],
            'rent.*.monthly_rent' => ['required','numeric'],
        ];
    }
}
