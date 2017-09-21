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

    'accepted'   => 'The :attribute must be accepted.',
    'active_url' => ':attribute は無効なURLです。',
    'after'      => ':attribute は :date よりも後の日付にして下さい。',
    'alpha'      => ':attribute は、文字が含まれている必要があります。',
    'alpha_dash' => ':attribute は英文字、数字、ダッシュ（-）のみ含めることが出来ます。',
    'alpha_num'  => ':attribute は英数字のみ含めることが出来ます。',
    'array'      => 'The :attribute must be an array.',
    'before'     => ':attribute は :date よりも前の日付にして下さい。',
    'between'    => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => ':attribute は :min から :max の範囲内にして下さい。',
    ],
    'boolean'        => 'The :attribute field must be true or false.',
    'confirmed'      => 'The :attribute confirmation does not match.',
    'date'           => 'The :attribute is not a valid date.',
    'date_format'    => 'The :attribute does not match the format :format.',
    'different'      => 'The :attribute and :other must be different.',
    'digits'         => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'email'          => 'The :attribute must be a valid email address.',
    'exists'         => 'The selected :attribute is invalid.',
    'distinct'       => 'The :attribute field has a duplicate value.',
    'filled'         => 'The :attribute field is required.',
    'image'          => ':attribute は画像にして下さい。',
    'in'             => 'The selected :attribute is invalid.',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => 'The :attribute must be an integer.',
    'ip'             => 'The :attribute must be a valid IP address.',
    'json'           => ':attribute は有効なJSON文字列にして下さい。',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':attribute はフォーマットが不正です。',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => ':other が :values に含まれない場合、:attribute フィールドは必須です。',
    'required_with'        => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_with_all'    => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => ':attribute は :size キロバイトにして下さい。',
        'string'  => ':attribute は :size 文字にして下さい。',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique'   => 'The :attribute has already been taken.',
    'url'      => ':attribute はフォーマットが不正です。',

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
            'rule-name' => 'カスタムメッセージ',
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
