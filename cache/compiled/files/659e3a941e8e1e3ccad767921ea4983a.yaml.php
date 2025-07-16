<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/config/plugins/form.yaml',
    'modified' => 1752692569,
    'size' => 1314,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => false,
        'client_side_validation' => true,
        'inline_errors' => false,
        'files' => [
            'multiple' => false,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => true,
            'accept' => [
                0 => 'image/*',
                1 => 'application/pdf',
                2 => 'application/msword',
                3 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                4 => 'text/plain'
            ],
            'filesize' => 5,
            'field' => [
                'destination' => 'self@',
                'avoid_overwriting' => false,
                'random_name' => true,
                'accept' => [
                    0 => 'image/*',
                    1 => 'application/pdf',
                    2 => 'application/msword',
                    3 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    4 => 'text/plain'
                ],
                'filesize' => 5
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light',
            'site_key' => '',
            'secret_key' => ''
        ],
        'messages' => [
            'success' => 'Спасибо! Ваше сообщение было успешно отправлено.',
            'error' => 'Произошла ошибка при отправке формы. Попробуйте еще раз.',
            'required' => 'Обязательное поле',
            'invalid_email' => 'Неправильный email адрес',
            'invalid_phone' => 'Неправильный номер телефона',
            'file_too_large' => 'Файл слишком большой',
            'invalid_file_type' => 'Неподдерживаемый тип файла'
        ]
    ]
];
