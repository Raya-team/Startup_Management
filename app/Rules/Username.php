<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Username implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/(^([a-zA-Z]+)(\d+)?$)/u', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'نام کاربری باید فقط شامل حروف انگلیسی و بدون ایجاد فاصله باشد';
    }
}
