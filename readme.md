## KodiCMS based on Laravel PHP Framework 
### [English Version](https://github.com/teodorsandu/kodicms-laravel/blob/dev/README_EN.md)

[![Join the chat at https://gitter.im/KodiCMS/kodicms-laravel](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/KodiCMS/kodicms-laravel?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

### Установка (Installation):

 * Клонировать репозиторий *(Clone repository)* `git clone https://github.com/KodiCMS/kodicms-laravel.git`
 * Запустить команду *(Run command)* `composer install` для загрузки всех необходимых компонентов
 * Выполнить установку системы *(Install CMS)* `php artisan cms:install` (`php artisan cms:install --help`) Или переименовать .env.example в .env и настроить подKeyение к БД, затем выполнить комманду *(Or rename .env.example to .env and set database connection, then run artisan command)* `php artisan cms:modules:migrate --seed`
 
---

### Авторизация (Authorization)

Сайт: http://laravel.kodicms.ru/backend

**Русский интерфейс**

username: **admin@site.com**  
password: **password**

**English interface**

username: **admin_en@site.com**  
password: **password**

---

### Изменения в Laravel.

##### bootstrap/app.php
Для профилирования загрузки сервис профайдеров в `bootstrap/app.php` изменен Application на `\KodiCMS\CMS\Application`, 
данное изменение можно не вносить.

##### app/Http/Kernel.php
Наследование `Kernel` от `KodiCMS\CMS\Http\Kernel`. Добавляются необходимые **middlemare** критичные для работы компонентов админ инетрфеса. **Обязательно**

##### app/Exceptions/Handler.php
Наследование `Handler` от `KodiCMS\CMS\Exceptions\Handler`. Добавлена обработка ошибок AJAX запросов, а также использование 
контроллера системы для вывода текста ошибок и whoops. **Желательно для установки**

##### app/Console/Kernel.php
Наследование `Kernel` от `KodiCMS\Cron\Console\Kernel`. Пока что нигде не используется. **Желательно для установки** при использовании модуля **Cron**


##### App/Http/Middleware/VerifyCsrfToken.php
Наследование `VerifyCsrfToken` от `KodiCMS\CMS\Http\Middleware\VerifyCsrfToken` для возможности добавления исKeyения для модулей. На данный момент
используется только модулем Filemanager. **Желательно для установки**

##### config/app.php

```
'providers' => [
   Illuminate\View\ViewServiceProvider::class,
   
   ...
   /*
    * KodiCMS Service Providers...
    * Place Widget до App провафдеров
    */
   KodiCMS\Support\Html\HtmlServiceProvider::class,
   Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class, // Можно не использовать, необходимо очистить 
   KodiCMS\CMS\Providers\ModuleLoaderServiceProvider::class,
   ...
]
```

##### config/cms.php
Добавлен конфиг `cms.php`

##### .env
`APP_PROFILING=false`
`ADMIN_DIR_NAME=backend`

---

### Консольные команды (Console commands)

 * `php artisan cms:install` - создание .env файла, миграция и добавление сидов (в будущем данная команда будет создавать файл и производить миграцию)
 * `php artisan modules:migrate` - создание таблиц в БД
   - Для отката старых миграций необходимо добавить `--rollback`
   - Для сидирования данных необходимо добавить `--seed`

 * `php artisan modules:seed` - заполнение таблиц тестовыми данными
 
 * `php artisan cms:modules:publish` - публикация `view` шаблонов *(Publish view templates)*
 * `php artisan cms:modules:locale:publish` - генерация пакета lang файлов для перевода. Файлы будут скопированы в `/resources/lang/vendor`
 * `php artisan cms:modules:locale:diff --locale=en` - проверка наличия всех Keyей в переводе в папке `/resources/lang/vendor` относительно модулей.
 * `php artisan cms:generate:translate:js` - генерация JS языковых файлов *(Generate javascript translate admin files)*
 
 * `php artisan modules:list` - просмотр информации о добавленных модулях и плагинов *(Show modules information)*
 * `php artisan cms:wysiwyg:list` - список установленных в системе WysiWyGов текста *(Show wysiwyg information)*
 * `php artisan cms:packages:list` - список всех media пакетов *(Show asset packages list)*
 * `php artisan cms:plugins:list` - просмотр информации о добавленных плагинах *(Show plugins information)*
 
 * `php artisan cms:layout:rebuild-blocks` - индексация размеченых блоков в шаблонах *(Rebuild templates blocks)*
 * `php artisan cms:api:generate-key` - генерация нового API Keyа *(Generate API key)*
 * `php artisan cms:reflinks:delete-expired` - Удаление просроченых сервисных ссылок
  
 * `php artisan cms:make:controller` - создание контроллера (`cms:make:controller TestController --module=cms --type=backend` создаст контроллер в модуле `modules\CMS`. Существует два типа контроллеров `[api, backend]`)
 
 * `php artisan cms:plugins:activate author:plugin` - активация плагина *(Plugin activation)*
 * `php artisan cms:plugins:deactivate author:plugin [--removetable=no]` - деактивация плагина (удаление таблицы из БД) *(Plugin deactivation)*

---

### RoadMap

 * ~~Переход на PSR-2~~
 * Написание документации по созданию модулей и плагинов, и по работе с системой (можно также встроить ее через модуль Userguide)
 * Настройка прав доступа для пользователя и группы
 * Реализация инсталлятора системы
 * Модуль поиска с использованием ElasticSearch
 * Работа с изображениями. Загрузка, редактирование, изменение размера на лету, вставка в текст.
 * Локализация
 * List для вывода данныхх
 * Развитие модуля DataSource

### Отдельное спасибо команде JetBrains за бесплатно предоставленый Key для PHPStorm
![PHPStorm](https://www.jetbrains.com/phpstorm/documentation/docs/logo_phpstorm.png)
