<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Security implements Rule
{

    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        return preg_match('/^[ -0123456789°_abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZآابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/', $value);
    }

    public function message()
    {
        return ':attribute یک فرمت معتبر نمیباشد';
    }
}
