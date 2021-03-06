<?php

return [
    'title'    => [
        'list'         => 'List',
        'create'       => 'Новый виджет',
        'edit'         => 'Редактирование виджета [:name]',
        'location'     => 'Места использования',
        'general'      => 'General',
        'settings'     => 'Settings',
        'assets'       => 'Медиа пакеты',
        'permissions'  => 'Права доступа',
        'cache'        => 'Кеширование',
        'template'     => 'Шаблон',
        'copy_widgets' => 'copy widgets from',
    ],
    'field'    => [
        'name'        => 'fieldname',
        'description' => 'Description',
        'type'        => 'Тип',
        'template'    => 'Шаблон',
        'cache'       => 'Кеширование',
        'actions'     => 'actions',
        'blocks'      => 'blocks',
        'position'    => 'Приоритет',
        'page'        => 'Страница',
    ],
    'label'    => [
        'handler'            => 'Обработчик',
        'remove_from_page'   => 'Убран со страницы',
        'hide'               => 'Скрытый',
        'before_page_render' => 'До загрузки страницы',
        'after_page_render'  => 'После загрузки страницы',
        'dont_copy_widgets'  => 'Не копировать',
        'block'              => 'Блок :block_name',
    ],
    'settings' => [
        'header'              => 'field title',
        'assets_package'      => 'Медиа пакеты',
        'cache_tags'          => 'Теги',
        'cache_lifetime'      => 'Время жизни кеша',
        'template_parameters' => 'Параметры шаблона',
        'related_widgets'     => 'Связанные виджеты',
    ],
    'button'   => [
        'create'          => 'Create',
        'location'        => 'Места использования',
        'select_blocks'   => 'Выбрать блоки',
        'rebuild_blocks'  => 'Обновить список',
        'select_childs'   => 'Выбрать внутренние',
        'add_to_page'     => 'Add widget',
        'defaultTemplate' => 'Layoutпо умолчанию',
        'cache'           => [
            'enabled'  => 'ВKeyено',
            'disabled' => 'ВыKeyено',
        ],
    ],
    'messages' => [
        'created'            => 'Виджет создан',
        'updated'            => 'Виджет сохранен',
        'deleted'            => 'Виджет удален',
        'corrupted'          => 'Виджет поврежден и не может быть использован',
        'is_handler'         => 'Для использования виджета отправляйте ваши данные на URL <code>:url</code> или используйте роут <code>:route</code>',
        'empty'              => 'empty message',
        'all_widgets_placed' => 'Check all all widgets are placed',
        'template_updated'   => 'Layoutвиджета изменен',
    ],
];
