<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class TransportationRequest extends FormRequest
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
            'transportations.*.description' => ['required'],
            'transportations.*.count' => ['required','numeric'],
            'transportations.*.unit_price' => ['required','numeric'],
        ];
    }
}
