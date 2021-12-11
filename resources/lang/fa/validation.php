<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"         => ":attribute باید پذیرفته شده باشد.",
    "active_url"       => "آدرس :attribute معتبر نیست",
    "after"            => ":attribute باید تاریخی بعد از :date باشد.",
    "alpha"            => ":attribute باید شامل حروف الفبا باشد.",
    "alpha_dash"       => ":attribute باید شامل حروف الفبا و عدد و خط تیره(-) باشد.",
    "alpha_num"        => ":attribute باید شامل حروف الفبا و عدد باشد.",
    "array"            => ":attribute باید شامل آرایه باشد.",
    "before"           => ":attribute باید تاریخی قبل از :date باشد.",
    "between"          => array(
        "numeric" => ":attribute باید بین :min و :max باشد.",
        "file"    => ":attribute باید بین :min و :max کیلوبایت باشد.",
        "string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
        "array"   => ":attribute باید بین :min و :max آیتم باشد.",
    ),
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => ":attribute با تاییدیه مطابقت ندارد.",
    "date"             => ":attribute یک تاریخ معتبر نیست.",
    "date_format"      => ":attribute با الگوی :format مطاقبت ندارد.",
    "different"        => ":attribute و :other باید متفاوت باشند.",
    "digits"           => ":attribute باید :digits رقم باشد.",
    "digits_between"   => ":attribute باید بین :min و :max رقم باشد.",
    "email"            => "فرمت :attribute معتبر نیست.",
    "exists"           => ":attribute انتخاب شده، معتبر نیست.",
    "image"            => ":attribute باید تصویر باشد.",
    "in"               => ":attribute انتخاب شده، معتبر نیست.",
    "integer"          => ":attribute باید نوع داده ای عددی (integer) باشد.",
    "ip"               => ":attribute باید IP آدرس معتبر باشد.",
    "max"              => array(
        "numeric" => ":attribute نباید بزرگتر از :max باشد.",
        "file"    => ":attribute نباید بزرگتر از :max کیلوبایت باشد.",
        "string"  => ":attribute نباید بیشتر از :max کاراکتر باشد.",
        "array"   => ":attribute نباید بیشتر از :max آیتم باشد.",
    ),
    "mimes"            => ":attribute باید یکی از فرمت های :values باشد.",
    "min"              => array(
        "numeric" => ":attribute نباید کوچکتر از :min باشد.",
        "file"    => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
        "string"  => ":attribute نباید کمتر از :min کاراکتر باشد.",
        "array"   => ":attribute نباید کمتر از :min آیتم باشد.",
    ),
    "not_in"           => ":attribute انتخاب شده، معتبر نیست.",
    "numeric"          => ":attribute باید شامل عدد باشد.",
    "regex"            => ":attribute یک فرمت معتبر نیست",
    "required"         => "فیلد :attribute الزامی است",
    "required_if"      => "فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.",
    "required_with"    => ":attribute الزامی است زمانی که :values موجود است.",
    "required_with_all"=> ":attribute الزامی است زمانی که :values موجود است.",
    "required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "required_without_all" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "same"             => ":attribute و :other باید مانند هم باشند.",
    "size"             => array(
        "numeric" => ":attribute باید برابر با :size باشد.",
        "file"    => ":attribute باید برابر با :size کیلوبایت باشد.",
        "string"  => ":attribute باید برابر با :size کاراکتر باشد.",
        "array"   => ":attribute باسد شامل :size آیتم باشد.",
    ),
    'string' => ':attribute باید یک رشته باشد.',
    "timezone"         => "The :attribute must be a valid zone.",
    "unique"           => ":attribute قبلا انتخاب شده است.",
    "url"              => "فرمت آدرس :attribute اشتباه است.",
    "exists_code"      => "کد ارسالی در سیستم وجود ندارد",
    "expire_code"      => "اعتبار کد ارسالی به پایان رسیده است",
    "used"             => "این کد قبلا مورد استفاده قرار گرفته است",
    "exists_phone"     => "چنین شماره ای در سیستم ثبت نشده است",
    'lt' => [
        'numeric' => ':attribute باید کم‌تر از :value باشد.',
        'file' => ':attribute باید کم‌تر از :value kilobytes باشد.',
        'string' => ':attribute باید کم‌تر از :value characters باشد.',
        'array' => ':attribute باید کم‌تر از :value items باشد.',
    ],


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => array(
        "name" => "نام",
        "username" => "نام کاربری",
        "email" => "پست الکترونیکی",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "country" => "کشور",
        "address" => "نشانی",
        "phone" => "تلفن",
        "mobile" => "تلفن همراه",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "size" => "اندازه",
        "body" => "متن",
        "imageUrl" => "تصویر",
        "videoUrl" => "آدرس ویدیو",
        "slug" => "نامک",
        "tags" => "تگ ها",
        "category" => "دسته",
        "story" => "داستان",
        'number' => 'شماره قسمت',
        'price' => 'قیمت دوره',
        'course_id' => 'دوره مورد نظر',
        'fileUrl' => 'آدرس فایل',
        'enSlug' => 'نامک انگلیسی',
        'percent' => 'درصد',
        'images' => 'تصویر',
        'permission_id' => 'عنوان مقام',
        'label' => 'توضیحات',
        'comment' => 'کامنت',
        'serial' => 'سریال',
        'land_id' => 'زمین',
        'role_id' => 'نقش ها',
        'user_id' => 'کاربر',
        'permissions' => 'مجوز ها',
        'phone_number' => 'شماره همراه',
        'image' => 'تصویر',
        'nickname' => 'نام مستعار',
        'min' => 'حداقل بازه',
        'max' => 'حداکثر بازه',
        'colors' => 'رنگ ها',
        'minimum' => 'حداقل بازه',
        'maximum' => 'حداکثر بازه',
        'index' => 'شاخص',
        'from' => 'از تاریخ',
        'to' => 'تا تاریخ',
        'filter' => 'پارامتر',
        'period' => 'بازه زمانی',
        'team_name' => 'نام تیم',
        'project_name' => 'نام طرح',
        'team_email' => 'ایمیل تیم',
        'team_phone' => 'شماره همراه تیم',
        'land_line' => 'شماره ثابت',
        'activity_field' => 'حوزه فعالیت',
        'status' => 'وضعیت ثبت شرکت',
        'major' => 'رشته',
        'responsibility[]' => 'مسئولیت',
        'responsibility' => 'مسئولیت',
        'fname' => 'نام اعضای تیم',
        'lname' => 'نام خانوادگی اعضای تیم',
        'education' => 'تحصیلات',
        'education_id' => 'تحصیلات',
        'resume' => 'سابقه',
        'investment' => 'میزان سرمایه گذاری',
        'product.*.product_name' => 'نام محصول',
        'product.*.product_type' => 'نوع محصول',
        'shareholders.*.percent' => 'درصد سهام',
        'key_partners' => 'شرکای کلیدی',
        'main_activities' => 'فعالیت های اصلی',
        'main_sources' => 'منابع اصلی',
        'cost_structure' => 'ساختار هزینه',
        'suggested_value' => 'ارزش پیشنهادی',
        'communication_with_clients' => 'ارتباط با مشتریان',
        'distribution_channels' => 'کانال توزیع',
        'customer_section' => 'بخش مشتریان',
        'income_flow' => 'جریان درآمد',
        'registered_team.registration_number' => 'شماره ثبت',
        'registered_team.registration_date' => 'تاریخ',
        'business_manager.owner' => 'نام و نام خانوادگی',
        'business_manager.phone_number' => 'شماره تماس',
        'business_manager.email' => 'ایمیل',
        'business_question.growth_center' => 'مرکز رشد',
        'business_question.start_date' => 'تاریخ شروع رسمی کسب و کار',
        'business_question.location_address' => 'آدرس محل فعالیت',
        'business_question.phone_number' => 'شماره تماس',
        'business_question.site_address' => 'آدرس وب سایت',
        'business_question.important_note' => 'نکته قابل توجه',
        'justification_plan.requirement' => 'نیاز',
        'justification_plan.solution' => 'راه حل',
        'justification_plan.competitors' => 'رقبا',
        'justification_plan.competitive_advantage' => 'مزیت رقابتی',
        'justification_plan.target_market' => 'بازار هدف',
        'justification_plan.technology_level' => 'سطح آمادگی فناوری',
        'justification_plan.required_budget' =>'بودجه مورد نیاز تقریبی',
        'justification_plan.income' => 'درآمد تقریبی',
        'justification_plan.technology_life' => 'عمر تکنولوژی(طرح)',
        'justification_plan.plan_development' => 'دلیل عدم ایجاد/توسعه طرح',
        'justification_plan.technical_knowledge' => 'ارزش دانش فنی',
        'previous_investors.*.name' => 'نام سرمایه گذار قبلی',
        'previous_investors.*.percent' => 'درصد',
        'idea' => 'ایده',
        'finance' => 'مباحث مالی',
        'experience' => 'تجربه',
        'risk' => 'مسئولیت و ریسک',
        'technology' => 'ایجاد و توسعه',
        'management' => 'مباحث مدیریتی',
        'sale' => 'فروش',
        'full_time' => 'تمام وقت بودن',
        'investor' => 'نام تامین کننده',
        'number_of_plan_year' => 'تعداد سال های طرح',
        'dollar' => 'قیمت روز دلار',
        'inflation' => 'نرخ تورم',
        'loan' => 'وام',
        'profit' => 'سود',
        'reimbursement' => 'باز پرداخت',
        'number_of_day_1' => 'تعداد روز',
        'number_of_day_2' => 'تعداد روز',
        'number_of_day_3' => 'تعداد روز',
        'number_of_day_4' => 'تعداد روز',
        'depreciation_rate_1' => 'میزان استهلاک',
        'depreciation_rate_2' => 'میزان استهلاک',
        'depreciation_rate_3' => 'میزان استهلاک',
        'depreciation_rate_4' => 'میزان استهلاک',
        'depreciation_rate_5' => 'میزان استهلاک',
        'type' => 'نوع محل اجرا',
        'lands.*.description' => 'شرح',
        'lands.*.area' => 'متراژ',
        'lands.*.price' => 'قیمت کل',
        'laboratory_equipments.*.description' => 'شرح',
        'laboratory_equipments.*.number' => 'تعداد',
        'laboratory_equipments.*.dollar_unit_price' => 'قیمت واحد',
        'laboratory_equipments.*.toman_unit_price' => 'قیمت واحد',
        'officeequipmentandsupplies.*.description' => 'شرح',
        'officeequipmentandsupplies.*.count' => 'تعداد',
        'officeequipmentandsupplies.*.unit_price' => 'قیمت واحد',
        'facilities.*.description' => 'شرح',
        'facilities.*.count' => 'تعداد',
        'facilities.*.unit_price' => 'قیمت واحد',
        'transportations.*.description' => 'شرح',
        'transportations.*.count' => 'تعداد',
        'transportations.*.unit_price' => 'قیمت واحد',
        'equipmentandmachineries.*.description' => 'شرح',
        'equipmentandmachineries.*.count' => 'تعداد',
        'equipmentandmachineries.*.unit_price' => 'قیمت واحد',
        'preoperatingcosts.*.description' => 'شرح',
        'preoperatingcosts.*.total_price' => 'قیمت کل',
    ),
);
