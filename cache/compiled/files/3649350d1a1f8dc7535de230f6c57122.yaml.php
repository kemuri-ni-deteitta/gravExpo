<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/grav-admin/user/blueprints/pages/portfolio-item.yaml',
    'modified' => 1753025020,
    'size' => 5767,
    'data' => [
        'title' => 'Portfolio Item',
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
                                    'label' => 'PLUGIN_ADMIN.CONTENT',
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
                        'metadata' => [
                            'type' => 'tab',
                            'title' => 'Метаданные проекта',
                            'fields' => [
                                'metadata_section' => [
                                    'type' => 'section',
                                    'title' => 'Информация о стенде',
                                    'underline' => true
                                ],
                                'header.stand_type' => [
                                    'type' => 'select',
                                    'label' => 'Тип стенда',
                                    'help' => 'Выберите тип стенда для этого проекта',
                                    'options' => [
                                        'typovye' => 'Типовой',
                                        'nestandart' => 'Нестандартный',
                                        'ekskluziv' => 'Эксклюзивный'
                                    ],
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.construction_area' => [
                                    'type' => 'text',
                                    'label' => 'Площадь застройки',
                                    'help' => 'Укажите площадь в квадратных метрах (например, "36 м²")',
                                    'placeholder' => '36 м²',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.exhibition_name' => [
                                    'type' => 'text',
                                    'label' => 'Название выставки',
                                    'help' => 'Укажите название выставки или мероприятия',
                                    'placeholder' => 'Например: WorldFood Moscow 2024',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.company_name' => [
                                    'type' => 'text',
                                    'label' => 'Название компании',
                                    'help' => 'Укажите название компании-клиента',
                                    'placeholder' => 'Название компании-клиента',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.project_year' => [
                                    'type' => 'text',
                                    'label' => 'Год проекта',
                                    'help' => 'Год реализации проекта',
                                    'placeholder' => '2024',
                                    'size' => 'small'
                                ]
                            ]
                        ],
                        'gallery' => [
                            'type' => 'tab',
                            'title' => 'Галерея проекта',
                            'fields' => [
                                'gallery_section' => [
                                    'type' => 'section',
                                    'title' => 'Фотографии стенда',
                                    'underline' => true
                                ],
                                'header.gallery' => [
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Фотографии стенда',
                                    'help' => 'Добавьте фотографии реализованного стенда',
                                    'collapsed' => false,
                                    'btnLabel' => 'Добавить фотографию',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Описание фотографии',
                                            'placeholder' => 'Краткое описание ракурса или особенности'
                                        ],
                                        '.image_upload' => [
                                            'type' => 'file',
                                            'label' => 'Загрузить изображение',
                                            'destination' => '@self',
                                            'multiple' => false,
                                            'limit' => 1,
                                            'filesize' => 10,
                                            'accept' => [
                                                0 => '.jpg',
                                                1 => '.jpeg',
                                                2 => '.png',
                                                3 => '.gif',
                                                4 => '.webp'
                                            ],
                                            'help' => 'Загрузите фотографию стенда. Максимальный размер 10MB.',
                                            'avoid_overwriting' => true,
                                            'random_name' => false
                                        ],
                                        '.is_main' => [
                                            'type' => 'toggle',
                                            'label' => 'Главная фотография',
                                            'help' => 'Отметьте, если это основная фотография проекта',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'Да',
                                                0 => 'Нет'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS',
                            'fields' => [
                                'publishing' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.PUBLISHING',
                                    'underline' => true
                                ],
                                'header.published' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.PUBLISHED',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.date' => [
                                    'type' => 'datetime',
                                    'label' => 'PLUGIN_ADMIN.DATE',
                                    'validate' => [
                                        'type' => 'datetime'
                                    ]
                                ],
                                'header.taxonomy.category' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'Категории',
                                    'help' => 'Добавьте категории для фильтрации',
                                    'validate' => [
                                        'type' => 'commalist'
                                    ]
                                ],
                                'header.taxonomy.tag' => [
                                    'type' => 'selectize',
                                    'size' => 'large',
                                    'label' => 'Теги',
                                    'help' => 'Добавьте теги для поиска',
                                    'validate' => [
                                        'type' => 'commalist'
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
