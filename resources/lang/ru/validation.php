<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    'accepted'   => ':attribute должно быть принято.',
    'active_url' => ':attribute не является правильным URL.',
    'after'      => ':attribute должно быть датой после :date.',
    'alpha'      => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только латинские буквы, цифры и дефис.',
    'alpha_num'  => ':attribute может содержать только буквы и цифры.',
    'array'      => ':attribute должно быть массивом.',
    'before'     => ':attribute должно быть датой до :date.',
    'between'    => [
        'numeric' => ':attribute должно быть между :min и :max.',
        'file'    => ':attribute должно быть от :min до :max килобайт.',
        'string'  => ':attribute должно быть от :min до :max символов.',
        'array'   => ':attribute должно содержать от :min до :max элементов.',
    ],
    'boolean'        => 'Поле :attribute должно содержать true или false.',
    'confirmed'      => 'Поля :attribute подтверждения не совпадает.',
    'date'           => ':attribute не является корректной датой.',
    'date_format'    => ':attribute не соответствует формату :format.',
    'different'      => ':attribute и :other должны различаться.',
    'digits'         => ':attribute должно содержать :digits цифр.',
    'digits_between' => ':attribute должно содержать от :min до :max цифр.',
    'email'          => ':attribute должно быть корректным адресом электронной почты.',
    'exists'         => 'Выбранное значение :attribute не верно.',
    'image'          => ':attribute должно быть изображением.',
    'in'             => 'Выбранное значение :attribute не верно.',
    'integer'        => ':attribute должно быть целым числом.',
    'ip'             => ':attribute не является корректным IP-адресом.',
    'max'            => [
        'numeric' => ':attribute не может быть больше чем  :max .',
        'file'    => ':attribute не может быть больше :max килобайт.',
        'string'  => ':attribute не должно превышать :max символов.',
        'array'   => ':attribute не может содержать больше чем :max элементов.',
    ],
    'mimes' => ':attribute должно быть файлом типа: :values.',
    'min'   => [
        'numeric' => ':attribute должно быть не меньше :min.',
        'file'    => ':attribute должно быть не меньше :min килобайт.',
        'string'  => ':attribute должно быть не меньше :min символов.',
        'array'   => ':attribute должно содержать не меньше чем :min элементов.',
    ],
    'not_in'               => 'Выбранное значение :attribute не верно.',
    'numeric'              => ':attribute должно быть числом.',
    'regex'                => 'Неправильный формат :attribute.',
    'required'             => 'Поле :attribute является обязательным.',
    'required_if'          => 'Поле :attribute является обязательным, если :other имеет значение :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Поле :attribute является обязательным, если заполнено :values.',
    'required_with_all'    => 'Поле :attribute является обязательным, если все :values заполнены.',
    'required_without'     => 'Поле :attribute является обязательным, если :values не заполнены.',
    'required_without_all' => 'Поле :attribute является обязательным, если ни одно из :values не заполнены.',
    'same'                 => 'Поля :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть длиной :size.',
        'file'    => 'Поле :attribute должно быть объемом :size килобайт.',
        'string'  => 'Поле :attribute должно содержать :size символов.',
        'array'   => 'Поле :attribute должно содержать :size элементов.',
    ],
    'string'   => 'Поле :attribute должно быть строкой.',
    'unique'   => ':attribute уже занято.',
    'url'      => 'Неправильный формат :attribute.',
    'timezone' => ':attribute должно быть корректным часовым поясом.',

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

    'attributes' => [],

];
