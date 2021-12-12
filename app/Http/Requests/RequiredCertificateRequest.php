<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class RequiredCertificateRequest extends FormRequest
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
            'required_certificates.*.description' => ['required',new Persian()],
            'required_certificates.*.received' => ['required',new Security()],
            'required_certificates.*.type' => ['required',new Security()],
        ];
    }
}
