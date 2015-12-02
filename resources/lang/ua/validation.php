<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute повинне бути приняте.',
    'active_url'           => ':attribute є недопустимим URL.',
    'after'                => ':attribute повинен бути датою після :date.',
    'alpha'                => ':attribute повинен містити тільки букви.',
    'alpha_dash'           => ':attribute повинен містити тільки букви, цифри і дефіс.',
    'alpha_num'            => ':attribute повинен містити тільки букви и цифри.',
    'array'                => ':attribute повинен бути масивом.',
    'before'               => ':attribute повинен бути датой перед :date.',
    'between'              => [
        'numeric' => ':attribute повинен бути між :min и :max.',
        'file'    => ':attribute повинен бути між :min и :max кілобайтами.',
        'string'  => ':attribute повинен бути між :min и :max символами.',
        'array'   => ':attribute повинен бути між :min і :max пунктами.',
    ],
    'boolean'              => ':attribute повинен бути булівським.',
    'confirmed'            => ':attribute не збігається з підтвердженням.',
    'date'                 => ':attribute є недопустимою датою.',
    'date_format'          => ':attribute не відповідає формату :format.',
    'different'            => ':attribute і :other повинні бути різними.',
    'digits'               => ':attribute повинен містити :digits цифр.',
    'digits_between'       => ':attribute повинен бути між :min і :max цифрами.',
    'email'                => ':attribute повинен бути e-mail адресом.',
    'exists'               => 'Вибраний :attribute недійсний.',
    'filled'               => ':attribute вимагається.',
    'image'                => ':attribute повинен бути зображенням.',
    'in'                   => 'Вибраний атрибут :attribute недійсний.',
    'integer'              => ':attribute повинен бути цілим числом.',
    'ip'                   => ':attribute повинен бути валідним IP-адресом.',
    'json'                 => ':attribute повинен бути у JSON-форматі.',
    'max'                  => [
        'numeric' => ':attribute повинен бути не більше ніж :max.',
        'file'    => ':attribute повинен бути не більше ніж :max кілобайт.',
        'string'  => ':attribute повинен бути не більше ніж :max символів.',
        'array'   => ':attribute повинен бути не більше ніж :max пунктів.',
    ],
    'mimes'                => ':attribute повинен бути файлом типу: :values.',
    'min'                  => [
        'numeric' => ':attribute повинен бути не менше :min.',
        'file'    => ':attribute повинен бути не менше :min кілобайт.',
        'string'  => ':attribute повинен бути не менше :min символів.',
        'array'   => ':attribute повинен бути не менше :min пунктів.',
    ],
    'not_in'               => 'Вибраний :attribute невалідний.',
    'numeric'              => ':attribute повинен бути числом.',
    'regex'                => 'Формат :attribute невалідний.',
    'required'             => 'Поле :attribute обов’язкове.',
    'required_if'          => ':attribute field is required when :other is :value.',
    'required_with'        => 'Поле :attribute обов’язкове, якщо :values існує.',
    'required_with_all'    => 'Поле :attribute обов’язкове, якщо :values існують.',
    'required_without'     => 'Поле :attribute обов’язкове, якщо :values не існує.',
    'required_without_all' => 'Поле :attribute обов’язкове, якщо жодне значення з :values не існує.',
    'same'                 => ':attribute і :other повинні співпадати.',
    'size'                 => [
        'numeric' => ':attribute повинен бути :size.',
        'file'    => ':attribute повинен бути :size кілобайт.',
        'string'  => ':attribute повинен бути :size символів.',
        'array'   => ':attribute повинен містити :size пунктів.',
    ],
    'string'               => ':attribute повинен бути стрічкою.',
    'timezone'             => ':attribute повинен бути реальною часовою зоною.',
    'unique'               => ':attribute не унікальний.',
    'url'                  => 'Формат :attribute недійсний.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'Ім’я',
        'last_name' => 'Прізвище',
        'flat' => 'Квартира',
        'flat_placeholder' => 'У які квартирі проживаєте?',
        'email' => 'E-mail',
        'password' => 'Пароль',
        'password_confirmation' => 'Підтвердження паролю',
        'old_password' => 'Старий пароль',
        'new_password' => 'Новий пароль',
        'new_password_confirmation' => 'Підтвердження нового паролю',
        'created_at' => 'Створено',
        'last_updated' => 'Востаннє змінено',
        'actions' => 'Дії',
        'active' => 'Активний',
        'confirmed' => 'Підтверджений',
        'send_confirmation_email' => 'Відправляти підтвердження по e-mail',
        'associated_roles' => 'Супроводжуючі ролі',
        'other_permissions' => 'Інші дозволи',
        'role_name' => 'Назва ролі',
        'role_sort' => 'Сортування ролі',
        'associated_permissions' => 'Супроводжуючі дозволи',
        'permission_name' => 'Назва дозволів',
        'display_name' => 'Відображене ім’я',
        'system_permission' => 'Системний дозвіл?',
        'permission_group_name' => 'Назва групи',
        'group' => 'Група',
        'group-sort' => 'Сортування групи',
    ],

];
