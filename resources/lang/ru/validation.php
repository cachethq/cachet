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
    'array'      => ':attribute должно быть массивом.',
    'before'     => ':attribute должно быть датой до :date.',
    'between'    => [
        'numeric' => 'Параметр :attribute должен быть датой до :date.',
        'file'    => 'Файл :attribute должен быть размером от :min до :max килобайт.',
        'string'  => 'Строка :attribute должна содержать от :min до :max символов.',
        'array'   => 'Массив :attribute должен содержать от :min до :max элементов.',
    ],
    'boolean'        => ':attribute может принимать только true/false значения.',
    'confirmed'      => 'Подтверждение параметра :attribute не совпадает.',
    'date'           => ':attribute не является корректной датой.',
    'date_format'    => ':attribute не совпадает с требуемым форматом даты: :format.',
    'different'      => 'Параметры :attribute и :other должны быть различны.',
    'digits'         => ':attribute должен содержать :digits цифр.',
    'digits_between' => ':attribute должен содержать от :min до :max цифр.',
    'email'          => ':attribute должен быть корректным адресом электронной почты.',
    'exists'         => 'Выбранное значение параметра :attribute некорректно.',
    'distinct'       => 'Параметр :attribute содержит повторяющиеся значения.',
    'filled'         => 'Параметр :attribute должен быть заполнен.',
    'image'          => ':attribute должен содержать изображение.',
    'in'             => 'Выбранное значение параметра :attribute некорректно.',
    'in_array'       => 'Выбранное значение параметра :attribute отсутствует в :other.',
    'integer'        => 'Параметр :attribute должен быть целым числом.',
    'ip'             => ':attribute должен содержать корректный IP-адрес.',
    'json'           => ':attribute должен содержать валидную строку в формате JSON.',
    'max'            => [
        'numeric' => 'Параметр :attribute не должен быть больше :max.',
        'file'    => ':attribute не должен иметь размер более :max килобайт.',
        'string'  => ':attribute не должно содержать более :max символов.',
        'array'   => ':attribute не может содержать более :max элементов.',
    ],
    'mimes' => ':attribute должен быть файлом, соответствующим одному из следующих типов: :values.',
    'min'   => [
        'numeric' => 'Параметр :attribute не должен быть меньше :min.',
        'file'    => ':attribute не должен иметь размер менее :min килобайт.',
        'string'  => ':attribute не должно содержать менее :min символов.',
        'array'   => ':attribute не может содержать менее :min элементов.',
    ],
    'not_in'               => 'Выбранное значение параметра :attribute некорректно.',
    'numeric'              => 'Параметр :attribute должен быть десятичным числом.',
    'present'              => 'Параметр :attribute должен быть указан.',
    'regex'                => 'Формат параметра :attribute некорректен.',
    'required'             => ':attribute необходимо заполнить.',
    'required_if'          => 'Параметр :attribute необходим к заполнению, когда параметр :other принимает значение :value.',
    'required_unless'      => 'Параметр :attribute необходим к заполнению, если параметр :other не принимает значения :values.',
    'required_with'        => 'Параметр :attribute необходим к заполнению, когда установлены следующие значения: :values.',
    'required_with_all'    => 'Параметр :attribute необходим к заполнению, когда установлены следующие значения: :values.',
    'required_without'     => 'Параметр :attribute необходим к заполнению, когда не установлены следующие значения: :values.',
    'required_without_all' => 'Параметр :attribute необходим к заполнению, когда не установлено ни одно из следующих значений: :values.',
    'same'                 => 'Параметры :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => ':attribute должно быть размером :size.',
        'file'    => ':attribute должен иметь размер в :size килобайт.',
        'string'  => ':attribute должно состоять из :size символов.',
        'array'   => ':attribute должен содержать :size элементов.',
    ],
    'string'   => 'Параметр :attribute должен быть строкой.',
    'timezone' => 'Часовая зона :attribute имеет некорректный формат.',
    'unique'   => 'Выбранное значение параметра :attribute уже было использовано.',
    'url'      => ':attribute не является корректным URL.',

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
