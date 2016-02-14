<?php

return [
    'tests'    => [
        'pass'     => 'Успешно',
        'failed'   => 'Провален',
        'success'  => [

        ],
        'errors'   => [
            'php_version' => 'KodiCMS requires PHP 5.4 or newer, this version is :version.',
        ],
        'messages' => [
            'pass' => 'Пройдено',
        ],
    ],
    'button'   => [
        'empty_database' => 'Очистить БД',
        'install'        => 'Place Widget',
    ],
    'title'    => [
        'language'             => 'Язык',
        'environment'          => 'Проверка окружения',
        'environment_optional' => 'Опционально',
        'database'             => 'База данных',
        'site_information'     => 'General',
        'user_settings'        => 'Settings пользователя',
        'site_settings'        => 'Settings сайта',
        'regional_settings'    => 'Regional',
        'not_installed'        => 'System не установлена',
        'other'                => 'Другое',
    ],
    'field'    => [
        'current_language' => 'Текущий язык',
        'db_driver'        => 'Драйвер',
        'db_server'        => 'Server',
        'db_username'      => 'Имя пользователя',
        'db_password'      => 'Пароль',
        'db_database'      => 'Имя базы данных',
        'db_preffix'       => 'Префикс таблиц',
        'username'         => 'Имя пользователя',
        'password'         => 'Пароль',
        'password_conform' => 'Подтверждения пароля',
        'email'            => 'E-mail',
        'site_title'       => 'fieldname сайта',
        'admin_dir_name'   => 'path до админ. интерфейса',
        'url_suffix'       => 'URL suffix',
        'interface_locale' => 'Язык интерфейса',
        'timezone'         => 'Временная зона',
        'date_format'      => 'Date format',
        'cache_type'       => 'Cache Driver',
        'session_type'     => 'Session Driver (type)',
    ],
    'messages' => [
        'not_installed'                   => 'Не найден файл окружения :file. Вы можете Create его вручную и установить систему через консоль, либо воспользоваться инсталлятором.',
        'database_name_inforamtion'       => 'Необходимо указать название существующей базы данных. или указать имя файла (при использовании sqlite)',
        'database_connection_failed'      => 'Не удалось подKeyиться к БД',
        'database_no_password'            => 'Если для подKeyения к БД не требуется пароль, оставьте поле пустым.',
        'database_connection_information' => 'Вам необходимо указать даные подKeyения к базе данных. Для подробностей обратитесь к администратору.',
        'environment_optional'            => 'Рекомендуемые требования для корректной работы компонентов системы',
        'environment_failed'              => 'Необходимо исправить проблемы',
        'environment_passed'              => 'Ваша System удовлетворяет всем требованиям KodiCMS',
    ],
    'wizard'   => [
        'finish'   => 'Завершить',
        'next'     => 'Далее',
        'previous' => 'Назад',
        'loading'  => 'Загрузка',
        'messages' => [
            'next_step_error' => 'Для перехода на следующий этап вы должны исправить все ошибки.',
        ],
    ],
];
