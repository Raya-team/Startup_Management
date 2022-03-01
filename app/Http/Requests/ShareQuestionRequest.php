<?php

namespace App\Http\Requests;

use App\Rules\Security;
use Illuminate\Foundation\Http\FormRequest;

class ShareQuestionRequest extends FormRequest
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

    public function attributes()
    {
        return [
            'Q1' => 'ایده اجرای طرح',
            'Q2' => 'مسئول مباحث مالی طرح',
            'Q3' => 'تجربه در زمینه مرتبط',
            'Q4' => 'مسئولیت و ریسک طرح',
            'Q5' => 'مسئول ایجاد و توسعه محصول/خدمت',
            'Q6' => 'مسئول جذب سرمایه گذار',
            'Q7' => 'مباحث مدیریتی طرح',
            'Q8' => 'مسئولیت بازاریابی و فروش',
            'Q9' => 'فعالیت به صورت تمام وقت'
        ];
    }
}
