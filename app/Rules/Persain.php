<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Persian implements Rule
{

    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        return preg_match('/^[ آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/', $value);
    }

    public function message()
    {
        return ':attribute باید شامل حروف فارسی باشد.';
    }
}
