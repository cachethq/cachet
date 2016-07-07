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
        'numeric' => ':attribute は :date よりも前の日付にして下さい。',
        'file'    => ':attribute は :min - :max の範囲内にして下さい。',
        'string'  => ':attribute は :min - :max キロバイトの範囲内にして下さい。',
        'array'   => ':attribute は :min から :max の範囲内にして下さい。',
    ],
    'boolean'        => ':attribute は :min から :max の範囲内にして下さい。',
    'confirmed'      => ':attribute はtrueもしくはfalseである必要があります。',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => ':attribute は無効な日付です。',
    'different'      => ':attribute はフォーマット :format に一致しません。',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => ':attribute は :digits 桁にして下さい。',
    'email'          => ':attribute は :min - :max 桁の数値にして下さい。',
    'exists'         => ':attribute は有効なメールアドレスにして下さい。',
    'distinct'       => 'The :attribute field has a duplicate value.',
    'filled'         => 'The :attribute format is invalid.',
    'image'          => ':attribute は画像にして下さい。',
    'in'             => ':attribute は画像にして下さい。',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => '選択された :attribute は有効ではありません。',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => ':attribute は有効なJSON文字列にして下さい。',
    'max'            => [
        'numeric' => ':attribute は有効なIPアドレスにして下さい。',
        'file'    => ':attribute は :max 以上にして下さい。',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute may not have more than :max items.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min kilobytes.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => '選択された :attribute は有効ではありません。',
    'present'              => 'The :attribute field must be present.',
    'regex'                => ':attribute は数字にして下さい。',
    'required'             => 'The :attribute format is invalid.',
    'required_if'          => ':attribute フィールドは必須です。',
    'required_unless'      => ':other が :values に含まれない場合、:attribute フィールドは必須です。',
    'required_with'        => ':other が :value の場合、:attribute フィールドは必須です。',
    'required_with_all'    => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_without'     => ':value が存在する場合、:attribute フィールドは必須です。',
    'required_without_all' => ':value が存在しな場合、:attribute フィールドは必須です。',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => ':attribute と :other は、一致しなければなりません。',
        'file'    => ':attribute は :size キロバイトにして下さい。',
        'string'  => ':attribute は :size 文字にして下さい。',
        'array'   => ':attribute は :size 文字にして下さい。',
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
