<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use Illuminate\Foundation\Http\FormRequest;

class ObtainedCertificateRequest extends FormRequest
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
            'obtained_certificate.*.description' => ['required',new Persian()],
            'obtained_certificate.*.acquisition_year' => ['required','numeric'],
            'obtained_certificate.*.comment' => ['required',new Persian()],
        ];
    }
}
