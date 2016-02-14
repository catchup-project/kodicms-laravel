<?php

return [
    'title'         => [
        'section'   => 'E-mail',
        'templates' => [
            'list'   => 'Письма',
            'create' => 'Новое письмо',
            'edit'   => 'Редактирование письма',
        ],
        'events'    => [
            'list'   => 'Почтовые события',
            'create' => 'Новое событие',
            'edit'   => 'Редактирование события :title',
        ],
    ],
    'button'        => [
        'events'    => [
            'create' => 'Create событие',
        ],
        'templates' => [
            'create' => 'Create письмо',
        ],
    ],
    'field'         => [
        'events'    => [
            'name'   => 'fieldname события',
            'code'   => 'Код события',
            'fields' => 'Параметры',
        ],
        'templates' => [
            'email_event'  => 'Почтовое событие',
            'status'       => 'Status',
            'use_queue'    => 'Метод отправки сообщения',
            'email_from'   => 'От кого',
            'email_to'     => 'Кому',
            'subject'      => 'Admin Theme',
            'message'      => 'Текст письма',
            'message_type' => 'Тип сообщения',
            'cc'           => 'CC',
            'bcc'          => 'Blind CC',
            'reply_to'     => 'Ответ на',
        ],
        'actions'   => 'События',
    ],
    'messages'      => [
        'events'    => [
            'created'       => 'Событие создано',
            'updated'       => 'Событие обновлено',
            'deleted'       => 'Событие удалено',
            'not_found'     => 'Событие не найдено',
            'job_not_found' => 'Событие :name не найдено',
        ],
        'templates' => [
            'created'   => 'Layout created',
            'updated'   => 'Layout updated',
            'deleted'   => 'Layout deleted',
            'not_found' => 'Layout not found',
        ],
    ],
    'tab'           => [
        'general'      => 'general tab',
        'fields'       => 'Используемые параметры',
        'message'      => 'Текст письма',
        'message_info' => 'Коллекция шаблонов писем с отзывчивым Designом :link',
    ],
    'templates'     => [
        'title'      => 'Связанные почтовые шаблоны',
        'created_at' => 'Время запуска',
        'status'     => 'Status выполнения',
    ],
    'statuses'      => [
        0 => 'Неактивен',
        1 => 'Активен',
    ],
    'queue'         => [
        0 => 'Прямая отправка',
        1 => 'Постановка в очередь',
    ],
    'message_types' => [
        'html' => 'HTML',
        'text' => 'Простой текст',
    ],
    'template_data' => [
        'default_email'    => 'E-Mail адрес по умолчанию',
        'site_title'       => 'Site title',
        'site_description' => 'Description сайта',
        'base_url'         => 'Адрес сайта (в формате :format)',
        'current_date'     => 'Mini Calendar (в формате :format)',
        'current_time'     => 'Current время (в формате :format)',
    ],
    'settings'      => [
        'title'         => 'Settings email',
        'queue'         => [
            'title'             => 'Параметры очереди сообщений',
            'batch_size'        => 'Кол-во сообщений отправляемых за одну отправку',
            'batch_help'        => 'The number of emails to send out in each batch. This should be tuned to your servers abilities and the frequency of the cron.',
            'interval'          => 'Интервал между отправкой',
            'max_attempts'      => 'Максимальное кол-во попыток отправки',
            'max_attempts_help' => 'The maximum number of attempts to send an email before giving up. An email may fail to send if the server is too busy, or there`s a problem with the email itself.',
        ],
        'default_email' => 'Email адрес по умолчанию',
        'email_driver'  => 'Драйвер',
        'test'          => [
            'label'           => 'Для отправки тестового письма необходимо Save Settings',
            'btn'             => 'Отправить тестовое письмо',
            'subject'         => 'Тестовое письмо',
            'message'         => 'Тестовое сообщение',
            'result_positive' => 'Тестовое письмо было успешно отправлено',
            'result_negative' => 'Тестовое письмо не было отправлено',
        ],
        'sendmail'      => [
            'path'        => 'path к исполняемому файлу',
            'placeholder' => 'Например: /usr/sbin/sendmail',
            'help'        => 'path до программы sendmail, обычно :path1 или :path2. :link',
        ],
        'smtp'          => [
            'host'       => 'Server',
            'port'       => 'Порт',
            'username'   => 'Имя пользователя',
            'password'   => 'Пароль',
            'encryption' => 'Шифрование',
        ],
        'mailgun'       => [
            'domain' => 'Домен',
            'secret' => 'Секретный Key',
        ],
        'mandrill'      => [
            'secret' => 'Секретный Key',
        ],
    ],
    'jobs'          => [
        'queue' => 'Отправка отложенных писем',
        'clean' => 'Удаление старых сообщений из очереди',
    ],
];
