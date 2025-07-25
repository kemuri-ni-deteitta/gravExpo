<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/blueprints/pages/contacts.yaml',
    'modified' => 1753462141,
    'size' => 2512,
    'data' => [
        'title' => 'Контакты',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'style' => 'vertical',
                                    'label' => 'PLUGIN_ADMIN.TITLE'
                                ],
                                'content' => [
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.media_order' => [
                                    'type' => 'pagemedia',
                                    'label' => 'PLUGIN_ADMIN.PAGE_MEDIA'
                                ]
                            ]
                        ],
                        'contact_info' => [
                            'type' => 'tab',
                            'title' => 'Контактная информация',
                            'fields' => [
                                'header.phones' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Телефоны',
                                    'help' => 'Добавьте номера телефонов компании',
                                    'collapsed' => false,
                                    'btnLabel' => 'Добавить телефон',
                                    'fields' => [
                                        '.number' => [
                                            'type' => 'text',
                                            'label' => 'Номер телефона',
                                            'placeholder' => '+7 (495) 123-45-67',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.description' => [
                                            'type' => 'text',
                                            'label' => 'Описание',
                                            'placeholder' => 'Главный офис, Отдел продаж и т.д.'
                                        ]
                                    ]
                                ],
                                'header.address' => [
                                    'type' => 'text',
                                    'label' => 'Адрес',
                                    'help' => 'Адрес компании для отображения на странице',
                                    'placeholder' => 'г. Москва, ул. Промышленная, д. 25, стр. 1',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.coordinates' => [
                                    'type' => 'text',
                                    'label' => 'Координаты для карты',
                                    'help' => 'Координаты в формате "широта,долгота" (например: 55.7533,37.6333)',
                                    'placeholder' => '55.7533,37.6333',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.email' => [
                                    'type' => 'email',
                                    'label' => 'Электронная почта',
                                    'help' => 'Основной email адрес компании',
                                    'placeholder' => 'info@expo-land.ru',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'email'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
