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
        'numeric' => ':attribute 必須介於 :min 到 :max 之間',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'        => ':attribute 欄位必須是 true 或 false',
    'confirmed'      => ':attribute 確認不符合',
    'date'           => ':attribute 不是一個有效的日期',
    'date_format'    => ':attribute 不符合 :format 的格式',
    'different'      => ':attribute 與 :other 必須不同',
    'digits'         => ':attribute 必須是 :digits 位數',
    'digits_between' => ':attribute 必須介於 :min 到 :max 位數之間',
    'email'          => ':attribute 必須是一個有效的電子郵件地址',
    'exists'         => '選擇的 :attribute 是無效的',
    'filled'         => ':attribute 欄位是必須的',
    'image'          => ':attribute 必須是圖片',
    'in'             => '選擇的 :attribute 是無效的',
    'integer'        => ':attribute 必須是整數',
    'ip'             => ':attribute 必須是有效的 IP 位址',
    'json'           => 'The :attribute must be a valid JSON string.',
    'max'            => [
        'numeric' => ':attribute 不能大於 :max',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute 檔案類型必須是 :values ',
    'min'   => [
        'numeric' => ':attribute 至少要 :min',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => '選擇的 :attribute 是無效的',
    'numeric'              => ':attribute 必須是數字',
    'regex'                => ':attribute 格式無效',
    'required'             => ':attribute 欄位是必須的',
    'required_if'          => ':attribute 欄位在 :other 為 :value 時，是必填的',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute 欄位在 :values 存在時，是必填的',
    'required_with_all'    => ':attribute 欄位在 :values 存在時，是必填的',
    'required_without'     => ':attribute 欄位在 :values 不存在時，是必填的',
    'required_without_all' => ':attribute 欄位在沒有 :values 存在時，是必填的',
    'same'                 => ':attribute 及 :other 必須相符',
    'size'                 => [
        'numeric' => ':attribute 必須為 :size',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => '這個 :attribute 必須是一個字串',
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
