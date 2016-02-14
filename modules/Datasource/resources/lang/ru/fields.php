<?php

return [
    'settings'     => [
        'hint' => 'Подсказка',
    ],
    'primary'      => [
        'title' => 'Primary',
    ],
    'integer'      => [
        'title'          => 'Число',
        'length'         => 'Длина',
        'min'            => 'Минимальное значение',
        'max'            => 'Максимальное значение',
        'auto_increment' => 'Автоматическое приращение',
        'increment_step' => 'Шаг',
    ],
    'string'       => [
        'title'           => 'Строка',
        'use_filemanager' => 'Использовать файловый менеджер',
        'length'          => 'Длина',
    ],
    'email'        => [
        'title' => 'Email',
    ],
    'slug'         => [
        'title'               => 'Slug',
        'is_unique'           => 'Уникальное',
        'from_document_title' => 'Брать значение из заголовка документа',
        'separator'           => 'Разделитель',
        'must_be_unique'      => 'Значение поля должно быть уникальным',
    ],
    'textarea'     => [
        'title'        => 'Текст',
        'allow_html'   => 'Разрешить HTML теги',
        'filter_html'  => 'Фильтровать HTML теги',
        'allowed_tags' => 'Разрешенные теги',
        'num_rows'     => 'Кол-во строк',
    ],
    'html'         => [
        'title'             => 'HTML c WysiWyGом',
        'filter_html'       => 'Фильтровать HTML теги',
        'allowed_tags'      => 'Разрешенные теги',
        'wysiwyg'           => 'WysiWyG текста',
        'remove_empty_tags' => 'Удалять пустые теги',
    ],
    'boolean'      => [
        'title' => 'Boolean',
        'style' => 'Стиль',
    ],
    'timestamp'    => [
        'title' => 'Timestamp',
    ],
    'date'         => [
        'title'            => 'Дата',
        'set_current_date' => 'Place Widget текущее время',
    ],
    'datetime'     => [
        'title' => 'Дата/Время',
    ],
    'user'         => [
        'title'        => 'Пользователь',
        'current_only' => 'Только текущий пользователь',
        'set_current'  => 'При создании выбирать текущего пользователя',
        'unique'       => 'Уникальные пользователи',
    ],
    'images'       => [
        'title'       => 'images',
        'upload_new'  => 'Загрузить новые изображения',
        'remove_file' => 'remove',
    ],
    'file'         => [
        'title'              => 'file',
        'upload_new'         => 'upload new',
        'allowed_types'      => 'allowed types',
        'allowed_types_list' => 'allowed types [:types]',
        'max_file_size'      => 'Максимальный размер файла',
        'max_size'           => 'Максимальные размер [:size]',
        'view_file'          => 'View Frontpage',
        'remove_file'        => 'remove',
    ],
    'image'        => [
        'title'             => 'Изображение',
        'max_file_size'     => 'Максимальный размер файла',
        'size_settings'     => 'Settings размера',
        'size'              => 'size',
        'quality'           => 'Качество',
        'crop'              => 'Обрезать',
        'aspect_ratio'      => 'Сохранять пропорции',
        'same_image_fields' => 'Загружать изображение также в поля',
    ],
    'has_one'      => [
        'title'           => 'HasOne',
        'view_document'   => 'View Frontpage',
        'create_document' => 'Add Button',
        'datasource'      => 'Раздел',
        'relation_type'   => 'Тип связи',
        'one_to_one'      => 'Один к одному',
        'one_to_many'     => 'Один ко многим',
    ],
    'has_many'     => [
        'title'      => 'HasMany',
        'datasource' => 'Раздел',
    ],
    'many_to_many' => [
        'title'      => 'ManyToMany',
        'datasource' => 'Раздел',
    ],
    'belongs_to'   => [
        'title' => 'Относится к',
    ],
];
