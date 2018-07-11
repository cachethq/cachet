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

    'accepted'   => ':attribute має будти прийнятий.',
    'active_url' => ':attribute не є допустимою URL адресою.',
    'after'      => ':attribute має бути після :date.',
    'alpha'      => ':attribute має містити лише літери.',
    'alpha_dash' => ':attribute має містити лише букви, цифри і тире.',
    'alpha_num'  => ':attribute має містити лише літери та цифри.',
    'array'      => ':attribute має бути массивом.',
    'before'     => ':attribute має бути датою до :date.',
    'between'    => [
        'numeric' => ':attribute має бути датою до :date.',
        'file'    => ':attribute має бути між :min і :max.',
        'string'  => 'Розмір :attribute має бути в межах між :min і :max.',
        'array'   => 'Поле :attribute має бути між :min та :max елементами.',
    ],
    'boolean'        => 'Поле :attribute має бути між :min та :max елементами.',
    'confirmed'      => 'Поле :attribute має бути true або false.',
    'date'           => 'Підтвердження для :attribute не співпадає.',
    'date_format'    => 'Значення :attribute не є коректною датою.',
    'different'      => 'Значення :attribute не відповідає формату :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'The :attribute field has a duplicate value.',
    'filled'         => 'The :attribute format is invalid.',
    'image'          => 'The :attribute must be an image.',
    'in'             => 'The :attribute must be an image.',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => ':attribute має бути цілим числом.',
    'json'           => 'The :attribute must be a valid JSON string.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute may not have more than :max items.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute має становити щонайменше :min кілобайт.',
        'string'  => ':attribute має становити щонайменше :min кілобайт.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'Поле :attribute має бути присутнім.',
    'regex'                => ':attribute має бути числом.',
    'required'             => 'The :attribute format is invalid.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is present.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => ':attribute i :other мають спiвпадати.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must be :size characters.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique'   => 'The :attribute has already been taken.',
    'url'      => 'The :attribute format is invalid.',

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
