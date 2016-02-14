<?php

return [
    'list'     => [
        'title'     => 'Список документов',
        'filtering' => [
            'title'            => 'Условия фильтрации',
            'query_string'     => 'Дополнительные параметры (в формате query string)',
            'invert_condition' => 'Инвертировать',
            'condition_value'  => 'Значение',
            'condition'        => 'Условие',
            'source'           => 'Источник',
            'button_add'       => 'Add Button условие',
            'where'            => 'Где',
            'field'            => 'Поле',
        ],
        'settings'  => [
            'document_uri'            => 'Страница документа [URI]',
            'example'                 => 'Пример: [:text]',
            'select_random_documents' => 'Выводить документы в произвольном порядке',
            'search_key'              => 'Key для поиска по документам [$_GET]',
        ],
    ],
    'document' => [
        'title'    => 'Документ',
        'settings' => [
            'document_id_source'     => 'Источник',
            'document_id_source_key' => 'Key источника документа',
            'document_id'            => 'Поле идентификатор',
            'throw_404'              => 'Выводить ошибку, если document не найден',
            'meta_fields'            => 'Мета поля',
            'meta_title'             => 'field title',
            'meta_keywords'          => 'Meta Keywords',
            'meta_description'       => 'Description',
            'change_crumbs'          => 'Изменять хлебные крошки',
        ],
    ],
];
