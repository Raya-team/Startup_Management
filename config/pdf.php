<?php

/*return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => ''
];*/


/*return [
    'mode'                  => 'utf-8',
    'format'                => 'A4',*/
//    'pdf_a'                 => false,
//    'pdf_a_auto'            => false,
//    'isHtml5ParserEnabled' => true,
//    'isemoteEnabled' => true,
    //'format' => 'A4-L',
    //'orientation' => 'L',
   /* 'default_font' => 'B Nazanin',
    'author'                => '',
    'subject'               => '',
    'keywords'              => '',
    'creator'               => 'Laravel Pdf',
    'display_mode'          => 'fullpage',
    'tempDir'               => base_path('../temp/'),

    'font_path' => base_path('public/assets/plugins/global/shabnam-font/'),
    'font_data' => [
        'Shabnam' => [
            'R'  => 'Shabnam.ttf',    // regular font*/
            //'B'  => '',       // optional: bold font
            //'I'  => '',     // optional: italic font
            //'BI' => '', // optional: bold-italic font
     /*       'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ]
    ]
];*/



return [
    'mode'                  => 'utf-8',
    'format'                => 'A4',
    'author'                => '',
    'subject'               => '',
    'keywords'              => '',
    'creator'               => '',
    'display_mode'          => 'fullpage',
    'tempDir'               => base_path('../temp/'),
    'font_path' => base_path('public/assets/plugins/global/fonts/shabnam-font/Farsi-Digits/'),
    // در هاست از آدرس زیر استفاده شود
//    'font_path' => base_path('../public_html/app/assets/plugins/global/fonts/shabnam-font/Farsi-Digits/'),
    'font_data' => [
        'fa' => [
            'R'  => 'Shabnam-FD.ttf',
            'B'  => 'Shabnam-Bold-FD.ttf',
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ],
        'en' => [
            'R'  => 'Gothic/Century Gothic.ttf',
            'B'  => 'Gothic/GOTHICB.ttf',
        ]
    ]
];