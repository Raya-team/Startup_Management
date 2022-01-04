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
return [
    'mode'                  => 'utf-8',
    'format'                => 'A4',
//    'pdf_a'                 => false,
//    'pdf_a_auto'            => false,
//    'isHtml5ParserEnabled' => true,
//    'isemoteEnabled' => true,
    //'format' => 'A4-L',
    //'orientation' => 'L',
    'default_font' => 'vazir',
    'author'                => '',
    'subject'               => '',
    'keywords'              => '',
    'creator'               => 'Laravel Pdf',
    'display_mode'          => 'fullpage',
    'tempDir'               => base_path('../temp/'),

    'font_path' => base_path('public/assets/plugins/global/shabnam-font/'),
    'font_data' => [
        'shabnam' => [
            'R'  => 'Shabnam.ttf',    // regular font
            //'B'  => '',       // optional: bold font
            //'I'  => '',     // optional: italic font
            //'BI' => '', // optional: bold-italic font
            'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ]
    ]
];