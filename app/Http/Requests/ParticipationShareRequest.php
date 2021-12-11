<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class ParticipationShareRequest extends FormRequest
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
            'pre_investors.*.investor' => ['required', new Security()],
            'pre_investors.*.investment' => ['required', 'numeric'],
            'new_investors.*.supplier' => ['required', 'min:3', 'max:16', new Persian()],
            'new_investors.*.investment' => ['required', 'numeric'],
        ];
    }
}
