<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'here' => 'Тут',
    'all_rights_reserved' => 'Всі права захищені.',
    'boilerplate_link' => 'Laravel Boilerplate',
    'backend' => [
        'WELCOME' => 'Ласкаво просимо',
        'dashboard_title' => 'Панель адміністрування',
    ],
    'based_on' => [
        'permission' => 'На основі дозволів - ',
        'role' => 'На основі ролей - ',
    ],
    'be_right_back' => 'Повертайтесь.',
    'cancel_button' => 'Відмінити',
    'click_here_to_confirm_account' => 'Натисніть для підтвердження аккаунта:',
    'click_here_to_reset' => 'Нажміть для скидання пароля:',
    'edit' => 'Редагувати',
    'full_name' => 'Повне ім\'я',
    'if_confirmed_is_off' => '(Якщо підтвердження виключено)',
    'js_injected_from_controller' => 'Ввід Javascript з контролера',
    'member_since' => 'Користувач з',
    'page_not_found' => 'Сторінка не знайдена',
    'password_successfully_changed' => 'Пароль успішно змінено',
    'profile_successfully_updated' => 'Профіль успішно збережено.',
    'save_button' => 'Зберегти',
    'search_placeholder' => 'Пошук...',
    'see_all' => [
        'messages' => 'Показати всі повідомлення',
        'notifications' => 'Показати всі',
        'tasks' => 'Показати всі задачі',
    ],
    'sorry_page_you_were_trying' => 'Сторінка, яку ви намагаєтесб переглянути, не існує',
    'test' => 'Тест',
    'using_access_helper' => [
        'array_permissions' => 'Использование Помощника Доступа c массивом имен разрешений или ID где пользователь владеет всеми.',
        'array_permissions_not' => 'Использование Помощника Доступа c массивом имен разрешений или ID где пользователь не владеет всеми.',
        'array_roles' => 'Использование Помощника Доступа c массивом имен ролей или ID где пользователь владеет всеми.',
        'array_roles_not' => 'Использование Помощника Доступа c массивом имен ролей или ID где пользователь не владеет всеми.',
        'permission_id' => 'Использование Помощника Доступа с ID разрешения',
        'permission_name' => 'Использование Помощника Доступа с именем разрешения',
        'role_id' => 'Использование Помощника Доступа с ID роли',
        'role_name' => 'Использование Помощника Доступа с именем роли',
    ],
    'using_blade_extensions' => 'Использование Blade расширений',
    'view_console_it_works' => 'Испрользуя консоль браузера, вы можете увидеть сообщение \'it works!\' ,которое исходит от FrontendController@index',
    'welcome_to' => 'Ласкаво просимо до порталу :place',
    'you_can_see_because' => 'Ви бачете це, тому що у вас є роль \':role\'!',
    'you_can_see_because_permission' => 'Ви бачете це, тому що у вас є дозвіл на \':permission\'!',
    'you_have' => [
        'messages' => '{0} У вас нет сообщений|{1} У вас есть 1 сообщение|[2,Inf] У вас :number сообщений',
        'notifications' => '{0} У вас нет уведомлений|{1} У вас 1 уведомление|[2,Inf] У вас :number уведомлений',
        'tasks' => '{0} У вас нет задач|{1} У вас 1 задача|[2,Inf] У вас :number задач',
    ],
    'create' => 'Створити',
    'delete' => 'Видалити',
    'permission' => '[0,1]Дозвіл|[2,Inf]Дозволів',
    'role' => '[0,1]Роль|[2,Inf]Ролей',
    'user' => '[0,1]Користувач|[2,Inf]Користувачів',
    'last_modified' => 'Востаннє відредаговано :last_modified, :user_name',
    'important_info_label' => 'Важлива інформація!',
    'be_registered' => link_to_action('Frontend\Auth\AuthController@getRegister', 'Зареєструйтесь').', щоб мати доступ до "внутрішніх" ресурсів порталу.',
];
