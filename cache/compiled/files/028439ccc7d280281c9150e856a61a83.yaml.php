<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/themes/quark/blueprints/pages/certificates.yaml',
    'modified' => 1752715405,
    'size' => 2163,
    'data' => [
        'title' => 'Certificates Page',
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
                                'header.menu' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.MENU',
                                    'help' => 'PLUGIN_ADMIN.MENU_HELP'
                                ],
                                'content' => [
                                    'type' => 'editor',
                                    'label' => 'PLUGIN_ADMIN.CONTENT',
                                    'help' => 'Описание страницы сертификатов'
                                ]
                            ]
                        ],
                        'certificates' => [
                            'type' => 'tab',
                            'title' => 'Сертификаты',
                            'fields' => [
                                'header.certificates' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Список сертификатов',
                                    'help' => 'Добавьте сертификаты с изображениями и описаниями',
                                    'collapsed' => false,
                                    'btnLabel' => 'Добавить сертификат',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Название сертификата',
                                            'placeholder' => 'Введите название сертификата',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.image_name' => [
                                            'type' => 'text',
                                            'label' => 'Имя файла изображения',
                                            'placeholder' => 'например, certificate1.jpg',
                                            'help' => 'Сначала загрузите изображение через "Page Media" выше, затем введите имя файла здесь',
                                            'validate' => [
                                                'required' => true
                                            ]
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Описание (необязательно)',
                                            'placeholder' => 'Краткое описание сертификата',
                                            'rows' => 3
                                        ]
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
