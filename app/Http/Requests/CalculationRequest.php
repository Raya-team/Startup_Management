<?php

namespace App\Http\Requests;

use App\Rules\Persian;
use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class CalculationRequest extends FormRequest
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
        if ($this->request->get('has_previous')){
            return [
                'previous_investors.*.name' => ['required' , 'min:3', 'max:32', new Persian()],
                'previous_investors.*.percent' => ['required' , 'numeric'],
                'idea' => ['required' , 'numeric'],
                'finance' => ['required' , 'numeric'],
                'experience' => ['required' , 'numeric'],
                'risk' => ['required' , 'numeric'],
                'technology' => ['required' , 'numeric'],
                'investment' => ['required' , 'numeric'],
                'management' => ['required' , 'numeric'],
                'sale' => ['required' , 'numeric'],
                'full_time' => ['required' , 'numeric'],
                'Q1' => ['required'],
                'Q2' => ['required'],
                'Q3' => ['required'],
                'Q4' => ['required'],
                'Q5' => ['required'],
                'Q6' => ['required'],
                'Q7' => ['required'],
                'Q8' => ['required'],
                'Q9' => ['required']
            ];
        } else {
            return [
                'idea' => ['required' , 'numeric'],
                'finance' => ['required' , 'numeric'],
                'experience' => ['required' , 'numeric'],
                'risk' => ['required' , 'numeric'],
                'technology' => ['required' , 'numeric'],
                'investment' => ['required' , 'numeric'],
                'management' => ['required' , 'numeric'],
                'sale' => ['required' , 'numeric'],
                'full_time' => ['required' , 'numeric'],
                'Q1' => ['required'],
                'Q2' => ['required'],
                'Q3' => ['required'],
                'Q4' => ['required'],
                'Q5' => ['required'],
                'Q6' => ['required'],
                'Q7' => ['required'],
                'Q8' => ['required'],
                'Q9' => ['required']
            ];
        }
    }
}
