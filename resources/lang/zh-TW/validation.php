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

    'accepted'   => '這個 :attribute 必須被接受',
    'active_url' => '這個 :attribute 不是一個有效的網址',
    'after'      => ':attribute 必須在 :date 之後',
    'alpha'      => ':attribute 只能包含字母',
    'alpha_dash' => ':attribute 只能包含字母、數字、破折號',
    'alpha_num'  => ':attribute 只能包含字母及數字',
    'array'      => ':attribute 必須是一個陣列',
    'before'     => ':attribute 必須在 :date 之前',
    'between'    => [
        'numeric' => ':attribute 必須在 :date 之前',
        'file'    => ':attribute的值必須於 :min 與 :max 之間。',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'        => 'The :attribute must have between :min and :max items.',
    'confirmed'      => ':attribute 的值必須為是或否。',
    'date'           => ':attribute 與其確認值不相符。',
    'date_format'    => ':attribute 並非一個有效的日期。',
    'different'      => ':attribute 不符合 :format 的格式',
    'digits'         => ':attribute 和 :other 不能相同。',
    'digits_between' => ':attribute 必須長 :digits 位.',
    'email'          => ':attribute的長度必須於 :min 與 :max 字元之間。',
    'exists'         => ':attribute 必須是一個有效的電子郵件地址。',
    'distinct'       => ':attribute 已被使用。',
    'filled'         => ':attribute 格式無效',
    'image'          => ':attribute 必須是圖片',
    'in'             => ':attribute 必須是圖片',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => '選定的 :attribute 無效。',
    'ip'             => 'The :attribute must be an integer.',
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
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min kilobytes.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => '選定的 :attribute 無效。',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => ':attribute 格式無效',
    'required_if'          => ':attribute 為必要值。',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => ':attribute 欄位在 :values 存在時，是必填的',
    'required_without'     => ':attribute 欄位在 :values 存在時，是必填的',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must be :size characters.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => ':attribute 必須是有效的區域',
    'unique'   => ':attribute 已經被佔用',
    'url'      => ':attribute 格式無效',

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
            'rule-name' => '自訂訊息',
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
