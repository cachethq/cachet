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

    'accepted'   => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after'      => ':attribute должно быть датой после :date.',
    'alpha'      => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только латинские буквы, цифры и дефис.',
    'alpha_num'  => ':attribute может содержать только буквы и цифры.',
    'array'      => ': attribute должно быть массивом.',
    'before'     => ':attribute должно быть датой до :date.',
    'between'    => [
        'numeric' => 'Значение :attribute должно быть между :min и :max.',
        'file'    => 'Значение :attribute должно быть между :min и :max килобайт.',
        'string'  => 'Значение :attribute должно быть между :min и :max символов.',
        'array'   => ':attribute должно содержать от :min до :max элементов.',
    ],
    'boolean'        => 'Значение :attribute должно быть true или false.',
    'confirmed'      => 'Подтверждение для :attribute не совпадает.',
    'date'           => 'Значение :attribute не является корректной датой.',
    'date_format'    => 'Значение :attribute не соответствует формату :format.',
    'different'      => 'Значения :attribute и :other должны быть разными.',
    'digits'         => 'Значение :attribute должно быть :digits цифр.',
    'digits_between' => 'Значение :attribute должно содержать от :min до :max цифр.',
    'email'          => 'Значение :attribute должно быть действительным E-mail адресом.',
    'exists'         => 'Выбранное значение :attribute недопустимо.',
    'distinct'       => 'Поле :attribute содержит дублирующееся значение.',
    'filled'         => 'Поле :attribute обязательно для заполнения.',
    'image'          => ':attribute должно быть изображением.',
    'in'             => 'Выбранное значение :attribute недопустимо.',
    'in_array'       => 'Поле :attribute не существует в :other.',
    'integer'        => 'Значение :attribute должно быть целым числом.',
    'ip'             => 'Значение :attribute должно быть действительным IP-адресом.',
    'json'           => ':attribute должен быть в JSON формате.',
    'max'            => [
        'numeric' => 'Значение :attribute не может быть более :max.',
        'file'    => 'Значение :attribute не может быть более :max килобайт(а).',
        'string'  => 'Значение :attribute не может быть больше :max символов.',
        'array'   => ':attribute не может содержать больше чем :max элементов.',
    ],
    'mimes' => ':attribute должно быть файлом одного из следующих типов: :values.',
    'min'   => [
        'numeric' => 'Значение :attribute не должно быть меньше чем :min.',
        'file'    => ':attribute должно быть не меньше :min килобайт.',
        'string'  => 'Значение :attribute должно быть по крайней мере :min символов.',
        'array'   => 'Значение :attribute должно быть не менее :min элементов.',
    ],
    'not_in'               => 'Выбранное значение :attribute недопустимо.',
    'numeric'              => 'Значение :attribute должно быть числом.',
    'present'              => 'Поле :attribute должно быть заполнено.',
    'regex'                => 'Неправильный формат :attribute.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно, если :other не из :values.',
    'required_with'        => 'Поле :attribute является обязательным, если все :values заполнены.',
    'required_with_all'    => 'Поле :attribute является обязательным, если все :values заполнены.',
    'required_without'     => 'Поле :attribute является обязательным, если :values не заполнены.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same'                 => 'Значение :attribute должно совпадать с :other.',
    'size'                 => [
        'numeric' => 'Значение :attribute должно быть длиной :size.',
        'file'    => ':attribute должно быть объемом :size килобайт.',
        'string'  => 'Поле :attribute должно содержать :size символов.',
        'array'   => 'Количество элементов в поле :attribute должно быть равным :size.',
    ],
    'string'   => 'Значение :attribute должно быть строкой.',
    'timezone' => ':attribute должно быть корректным часовым поясом.',
    'unique'   => ':attribute уже занято.',
    'url'      => 'Неправильный формат :attribute.',

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
            'rule-name' => 'настраиваемое сообщение',
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
