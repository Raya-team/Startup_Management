<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class KeyEmployeeRequest extends FormRequest
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
            'fname' => ['required', 'min:3', 'max:16', new Persian()],
            'lname' => ['required', 'min:3', 'max:16', new Persian()],
            'major' => ['required', 'max:32', new Persian()],
            'age' => ['required', new Security()],
            'responsibility' => ['required'],
            'education_id' => ['required', new Security()],
            'resume' => ['required','numeric'],
        ];
    }
}
