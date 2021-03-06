<?php

return [
    'title'    => [
        'list'              => 'permissions (users)',
        'profile'           => 'Профиль',
        'profile_alternate' => 'Профиль пользователя :name',
        'settings'          => 'Settings',
        'permissions'       => 'Права доступа',
        'edit'              => 'Редактирование пользователя :name',
        'create'            => 'Создание пользователя',
        'theme'             => 'Admin Theme',
    ],
    'tab'      => [
        'general'  => 'Information (Site)',
        'password' => 'Пароль',
        'roles'    => 'Roles',
        'theme'    => 'Admin Theme',
    ],
    'field'    => [
        'username'         => 'Имя пользователя',
        'email'            => 'E-mail',
        'password'         => 'Пароль',
        'password_confirm' => 'Подтверждение пароля',
        'last_login'       => 'Последний вход',
        'locale'           => 'Язык системы',
        'default_locale'   => 'Default Locale (:locale)',
        'roles'            => 'Roles',
        'actions'          => 'actions',
        'auth'             => [
            'username' => 'Логин или E-mail',
            'password' => 'Пароль',
            'email'    => 'E-mail адрес',
            'forgot'   => 'Забыли пароль?',
            'remember' => 'Запомнить меня на :lifetime дней',
        ],
    ],
    'rule'     => [
        'username'        => 'Не менее :num символов. Должен быть уникальным.',
        'password_change' => 'Если не желаете менять пароль — оставьте поля пустыми.',
        'roles'           => 'Roles определяют права пользователей, позволяют вKeyать/выKeyать разделы панели управления.',
    ],
    'button'   => [
        'login'         => 'Вход',
        'logout'        => 'Выход',
        'send_password' => 'Выслать пароль',
        'edit'          => 'Редактировать',
        'create'        => 'Add Button пользователя',
    ],
    'messages' => [
        'user' => [
            'not_found' => 'Пользователь не найден',
            'deleted'   => 'Пользователь удален',
            'updated'   => 'Пользователь обновлен',
            'created'   => 'Пользователь создан',
            'empty'     => 'В разделе нет документов',
        ],
        'auth' => [
            'forgot'         => 'Укажите email адрес, для которого вы хотите восстановить пароль.',
            'deny_access'    => 'Dashboard (backend) запрещен',
            'no_permissions' => 'У вас нет необходимых прав',
            'unauthorized'   => 'Необходима авторизация',
            'user_not_found' => 'Не верный логин или пароль',
        ],
    ],
];
