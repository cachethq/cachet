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
        'numeric' => ':attribute должно быть датой до :date.',
        'file'    => 'Значение :attribute должно быть между :min и :max.',
        'string'  => 'Значение :attribute должно быть между :min и :max килобайт.',
        'array'   => ':attribute должно содержать от :min до :max элементов.',
    ],
    'boolean'        => ':attribute должно содержать от :min до :max элементов.',
    'confirmed'      => 'Значение :attribute должно быть true или false.',
    'date'           => 'Подтверждение для :attribute не совпадает.',
    'date_format'    => 'Значение :attribute не является корректной датой.',
    'different'      => 'Значение :attribute не соответствует формату :format.',
    'digits'         => 'Значения :attribute и :other должны быть разными.',
    'digits_between' => 'Значение :attribute должно быть :digits цифр.',
    'email'          => 'Значение :attribute должно содержать от :min до :max цифр.',
    'exists'         => 'Значение :attribute должно быть действительным E-mail адресом.',
    'distinct'       => 'Поле :attribute содержит дублирующееся значение.',
    'filled'         => 'Неправильный формат :attribute.',
    'image'          => ':attribute должно быть изображением.',
    'in'             => ':attribute должно быть изображением.',
    'in_array'       => 'Поле :attribute не существует в :other.',
    'integer'        => 'Выбранное значение :attribute недопустимо.',
    'ip'             => 'Значение :attribute должно быть целым числом.',
    'json'           => ':attribute должен быть в JSON формате.',
    'max'            => [
        'numeric' => 'Значение :attribute должно быть действительным IP-адресом.',
        'file'    => 'Значение :attribute не может быть более :max.',
        'string'  => 'Значение :attribute не может быть более :max килобайт(а).',
        'array'   => ':attribute не может содержать больше чем :max элементов.',
    ],
    'mimes' => ':attribute не может содержать больше чем :max элементов.',
    'min'   => [
        'numeric' => ':attribute должно быть файлом одного из следующих типов: :values.',
        'file'    => ':attribute должно быть не меньше :min килобайт.',
        'string'  => ':attribute должно быть не меньше :min килобайт.',
        'array'   => 'Значение :attribute должно быть по крайней мере :min символов.',
    ],
    'not_in'               => 'Значение :attribute должно быть не менее :min элементов.',
    'numeric'              => 'Выбранное значение :attribute недопустимо.',
    'present'              => 'Поле :attribute должно быть заполнено.',
    'regex'                => 'Значение :attribute должно быть числом.',
    'required'             => 'Неправильный формат :attribute.',
    'required_if'          => 'Поле :attribute обязательно для заполнения.',
    'required_unless'      => 'Поле :attribute обязательно, если :other не из :values.',
    'required_with'        => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_with_all'    => 'Поле :attribute является обязательным, если все :values заполнены.',
    'required_without'     => 'Поле :attribute является обязательным, если все :values заполнены.',
    'required_without_all' => 'Поле :attribute является обязательным, если :values не заполнены.',
    'same'                 => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'size'                 => [
        'numeric' => 'Значение :attribute должно совпадать с :other.',
        'file'    => ':attribute должно быть объемом :size килобайт.',
        'string'  => 'Поле :attribute должно содержать :size символов.',
        'array'   => 'Поле :attribute должно содержать :size символов.',
    ],
    'string'   => 'Количество элементов в поле :attribute должно быть равным :size.',
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
