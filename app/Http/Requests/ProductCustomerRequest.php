<?php

namespace App\Http\Requests;

use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class ProductCustomerRequest extends FormRequest
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
            'product_customers.*.customer_features' => ['required',new Security()],
            'product_customers.*.first_group_customers' => ['required',new Security()],
            'product_customers.*.second_group_customers' => ['required',new Security()],
            'product_customers.*.third_group_customers' => ['required',new Security()],
            'product_customers.*.fourth_group_customers' => ['required',new Security()],
        ];
    }
}
