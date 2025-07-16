<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/ivan/grav-admin/user/pages/06.otpravit-zayavku/form.md',
    'modified' => 1752692369,
    'size' => 4514,
    'data' => [
        'header' => [
            'title' => 'Отправить заявку',
            'menu' => 'Заявка',
            'template' => 'form',
            'visible' => true,
            'form' => [
                'name' => 'inquiry_form',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Ваше имя',
                        'placeholder' => 'Введите ваше имя',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'company',
                        'label' => 'Компания',
                        'placeholder' => 'Название компании',
                        'type' => 'text'
                    ],
                    2 => [
                        'name' => 'phone',
                        'label' => 'Телефон',
                        'placeholder' => '+7 (xxx) xxx-xx-xx',
                        'type' => 'tel',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    3 => [
                        'name' => 'email',
                        'label' => 'Email',
                        'placeholder' => 'your@email.com',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    4 => [
                        'name' => 'service',
                        'label' => 'Услуга',
                        'type' => 'select',
                        'options' => [
                            '' => 'Выберите услугу',
                            'exhibition' => 'Выставочные стенды',
                            'outdoor' => 'Наружная реклама',
                            'interior' => 'Дизайн интерьеров',
                            'consultation' => 'Консультация',
                            'other' => 'Другое'
                        ],
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    5 => [
                        'name' => 'budget',
                        'label' => 'Бюджет проекта',
                        'type' => 'select',
                        'options' => [
                            '' => 'Выберите бюджет',
                            'small' => 'До 100 000 руб.',
                            'medium' => 'От 100 000 до 500 000 руб.',
                            'large' => 'От 500 000 до 1 000 000 руб.',
                            'enterprise' => 'Свыше 1 000 000 руб.',
                            'discuss' => 'Обсудим при встрече'
                        ]
                    ],
                    6 => [
                        'name' => 'message',
                        'label' => 'Описание проекта',
                        'placeholder' => 'Расскажите о вашем проекте, требованиях и пожеланиях',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    7 => [
                        'name' => 'file',
                        'label' => 'Прикрепить файл',
                        'type' => 'file',
                        'accept' => '.pdf,.doc,.docx,.jpg,.jpeg,.png'
                    ],
                    8 => [
                        'name' => 'agreement',
                        'label' => 'Согласие на обработку персональных данных',
                        'type' => 'checkbox',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Отправить заявку',
                        'classes' => 'btn btn-primary'
                    ],
                    1 => [
                        'type' => 'reset',
                        'value' => 'Очистить',
                        'classes' => 'btn btn-secondary'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => 'info@expo-land.ru'
                            ],
                            'subject' => '[Заявка] Новая заявка с сайта',
                            'body' => '{% include "forms/data.html.twig" %}'
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'inquiry-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include "forms/data.txt.twig" %}'
                        ]
                    ],
                    2 => [
                        'message' => 'Спасибо за заявку! Мы свяжемся с вами в ближайшее время.'
                    ],
                    3 => [
                        'display' => 'thankyou'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Отправить заявку
menu: Заявка
template: form
visible: true
form:
    name: inquiry_form
    fields:
        - name: name
          label: Ваше имя
          placeholder: Введите ваше имя
          type: text
          validate:
            required: true
        - name: company
          label: Компания
          placeholder: Название компании
          type: text
        - name: phone
          label: Телефон
          placeholder: +7 (xxx) xxx-xx-xx
          type: tel
          validate:
            required: true
        - name: email
          label: Email
          placeholder: your@email.com
          type: email
          validate:
            required: true
        - name: service
          label: Услуга
          type: select
          options:
            \'\': \'Выберите услугу\'
            \'exhibition\': \'Выставочные стенды\'
            \'outdoor\': \'Наружная реклама\'
            \'interior\': \'Дизайн интерьеров\'
            \'consultation\': \'Консультация\'
            \'other\': \'Другое\'
          validate:
            required: true
        - name: budget
          label: Бюджет проекта
          type: select
          options:
            \'\': \'Выберите бюджет\'
            \'small\': \'До 100 000 руб.\'
            \'medium\': \'От 100 000 до 500 000 руб.\'
            \'large\': \'От 500 000 до 1 000 000 руб.\'
            \'enterprise\': \'Свыше 1 000 000 руб.\'
            \'discuss\': \'Обсудим при встрече\'
        - name: message
          label: Описание проекта
          placeholder: Расскажите о вашем проекте, требованиях и пожеланиях
          type: textarea
          validate:
            required: true
        - name: file
          label: Прикрепить файл
          type: file
          accept: .pdf,.doc,.docx,.jpg,.jpeg,.png
        - name: agreement
          label: Согласие на обработку персональных данных
          type: checkbox
          validate:
            required: true
    buttons:
        - type: submit
          value: Отправить заявку
          classes: btn btn-primary
        - type: reset
          value: Очистить
          classes: btn btn-secondary
    process:
        - email:
            from: \'{{ config.plugins.email.from }}\'
            to: [\'info@expo-land.ru\']
            subject: \'[Заявка] Новая заявка с сайта\'
            body: \'{% include "forms/data.html.twig" %}\'
        - save:
            fileprefix: inquiry-
            dateformat: Ymd-His-u
            extension: txt
            body: \'{% include "forms/data.txt.twig" %}\'
        - message: Спасибо за заявку! Мы свяжемся с вами в ближайшее время.
        - display: thankyou',
        'markdown' => '# Отправить заявку

Заполните форму ниже, и мы свяжемся с вами для обсуждения вашего проекта. Наши специалисты готовы ответить на все вопросы и предложить оптимальное решение.

## Почему стоит обратиться к нам?

- **Бесплатная консультация** - обсудим ваш проект без обязательств
- **Быстрый отклик** - ответим в течение 1 часа в рабочее время
- **Индивидуальный подход** - учтём все ваши пожелания
- **Прозрачное ценообразование** - подробная смета без скрытых платежей

## Как мы работаем

1. **Заявка** - вы заполняете форму или звоните нам
2. **Консультация** - обсуждаем детали проекта
3. **Предложение** - готовим техническое задание и смету
4. **Договор** - фиксируем все условия
5. **Реализация** - создаём ваш проект
6. **Сдача** - принимаем работу и предоставляем гарантию

## Форма заявки

Заполните все обязательные поля формы: '
    ]
];
