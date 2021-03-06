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
                'previous_investors.*.name' => ['required' , 'min:3', 'max:32'],
                'previous_investors.*.percent' => ['required' , 'numeric', 'max:100'],
                'idea' => ['required' , 'numeric', 'max:100'],
                'finance' => ['required' , 'numeric', 'max:100'],
                'experience' => ['required' , 'numeric', 'max:100'],
                'risk' => ['required' , 'numeric', 'max:100'],
                'technology' => ['required' , 'numeric', 'max:100'],
                'investment' => ['required' , 'numeric', 'max:100'],
                'management' => ['required' , 'numeric', 'max:100'],
                'sale' => ['required' , 'numeric', 'max:100'],
                'full_time' => ['required' , 'numeric', 'max:100'],
                'Q1' => ['required'],
                'Q2' => ['required'],
                'Q3' => ['required'],
                'Q4' => ['required'],
                'Q5' => ['required'],
                'Q6' => ['required'],
                'Q7' => ['required'],
                'Q8' => ['required'],
                'Q9' => ['required'],
            ];
        } else {
            return [
                'idea' => ['required' , 'numeric', 'max:100'],
                'finance' => ['required' , 'numeric', 'max:100'],
                'experience' => ['required' , 'numeric', 'max:100'],
                'risk' => ['required' , 'numeric', 'max:100'],
                'technology' => ['required' , 'numeric', 'max:100'],
                'investment' => ['required' , 'numeric', 'max:100'],
                'management' => ['required' , 'numeric', 'max:100'],
                'sale' => ['required' , 'numeric', 'max:100'],
                'full_time' => ['required' , 'numeric', 'max:100'],
                'Q1' => ['required'],
                'Q2' => ['required'],
                'Q3' => ['required'],
                'Q4' => ['required'],
                'Q5' => ['required'],
                'Q6' => ['required'],
                'Q7' => ['required'],
                'Q8' => ['required'],
                'Q9' => ['required'],
            ];
        }
    }

    public function attributes()
    {
        return [
            'Q1' => '???????? ?????????? ??????',
            'Q2' => '?????????? ?????????? ???????? ??????',
            'Q3' => '?????????? ???? ?????????? ??????????',
            'Q4' => '?????????????? ?? ???????? ??????',
            'Q5' => '?????????? ?????????? ?? ?????????? ??????????/????????',
            'Q6' => '?????????? ?????? ???????????? ????????',
            'Q7' => '?????????? ?????????????? ??????',
            'Q8' => '?????????????? ?????????????????? ?? ????????',
            'Q9' => '???????????? ???? ???????? ???????? ??????'
        ];
    }
}
