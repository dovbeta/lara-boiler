<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CRUD Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in CRUD operations throughout the
    | system.
    | Regardless where it is placed, a CRUD label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'actions' => 'Дії',
    'permissions' => [
        'name' => 'Назва',
        'permission' => 'Дозвіл',
        'roles' => 'Ролі',
        'system' => 'Системний?',
        'total' => 'дозволів всього',
        'users' => 'Користцвачі',
        'group' => 'Група',
        'group-sort' => 'Сортування групи',
        'groups' => [
            'name' => 'Ім’я групи',
        ],
    ],
    'roles' => [
        'number_of_users' => '# Користувачів',
        'permissions' => 'Дозволи',
        'role' => 'Роль',
        'total' => 'ролей всього',
        'sort' => 'Сортування',
    ],
    'users' => [
        'confirmed' => 'Підтверджений',
        'created' => 'Створений',
        'delete_permanently' => 'Видалити назавжди',
        'email' => 'E-mail',
        'id' => 'ID',
        'last_updated' => 'Востаннє змінено',
        'name' => 'Ім’я',
        'last_name' => 'Прізвище',
        'no_banned_users' => 'Немає заблокованих користувачів',
        'no_deactivated_users' => 'Немає деативованих користувачів',
        'no_deleted_users' => 'Немає видалених користувачів',
        'other_permissions' => 'Інший дозвіл',
        'restore_user' => 'Відновити користувача',
        'roles' => 'Ролі',
        'total' => 'користувачів всього',
    ],
    'flats' => [
        'number' => 'Номер',
        'rooms_number' => 'Кімнат',
        'entrance' => 'Під’їзд',
        'floor' => 'Поверх',
        'area' => 'Площа',
    ],
    'meters' => [
        'number' => 'Номер',
        'commodity' => 'Тип ресурсу',
        'flat_number' => 'Номер квартири',
    ],

    /*
    |--------------------------------------------------------------------------
    | CRUD Language Lines outside view Files
    |--------------------------------------------------------------------------
    |
    | These lines are being marked as obsolete by the localization helper
    | because they will only be found outside view files.
    |
    */
    'activate_user_button' => 'Активировать пользователя',
    'ban_user_button' => 'Заблокировать пользователя',
    'change_password_button' => 'Сменить пароль',
    'deactivate_user_button' => 'Деактивировать пользователя',
    'delete_button' => 'Видалити',
    'edit_button' => 'Редагувати',
    'show_button' => 'Переглянути',
    'add_button' => 'Додати',
    'save_button' => 'Зберегти',

];
