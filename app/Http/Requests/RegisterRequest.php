<?php

namespace App\Http\Requests;
use App\Rules\Landline;
use App\Rules\Persian;
use App\Rules\Phone;
use App\Rules\Security;
use App\Rules\Username;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => ['required', 'unique:users', 'max:16', new Username()],
            'email' => ['required','email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:6', 'max:16'],
            'password_confirmation' => ['required_with:password', 'same:password'],
            'team_name' => ['required', 'min:3', 'max:32', 'unique:teams,name'],
            'project_name' => ['required', 'min:3', 'max:32', new Security()],
            'team_email' =>  ['required', 'email', 'max:255', 'unique:teams,email'],
            'team_phone' => ['required','unique:teams,phone_number' ,new Phone(), 'digits:11', 'numeric'],
            'activity_field' => ['required', new Security()],
            'status' => ['required', new Security()],
            'fname' => ['required', 'min:3', 'max:16'],
            'lname' => ['required', 'min:3', 'max:16'],
            'major' => ['required', 'max:32'],
            'age' => ['required', new Security()],
            'responsibility' => ['required'],
            'education' => ['required', new Security()],
            'resume' => ['required','numeric'],
            'investment' => ['required','numeric'],
            'product.*.product_name' => ['required', new Security()],
            'product.*.product_type' => ['required', new Security()],
        ];
    }
}
