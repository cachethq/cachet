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

    'accepted'   => ':attribute 必須是可以接受的。',
    'active_url' => ':attribute 不是壹個有效的URL網址。',
    'after'      => ':attribute 必須在 :date 之後。',
    'alpha'      => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母，數字和破折號。',
    'alpha_num'  => ':attribute 只允許包含字母和數字。',
    'array'      => ':attribute 必須是個數組。',
    'before'     => ':attribute 必須在 :date 之前。',
    'between'    => [
        'numeric' => ':attribute 必須在 :min 到 :max 之間。',
        'file'    => ':attribute 必須在 :min 到 :max KB 之間。',
        'string'  => ':attribute 必須在 :min 到 :max 字符之間。',
        'array'   => ':attribute 必須在 :min 到 :max 個數目之間。',
    ],
    'boolean'        => ':attribute 必須為 true（正確） 或者 false（錯誤）',
    'confirmed'      => ':attribute 與確認項目不匹配',
    'date'           => ':attribute 不是個有效日期',
    'date_format'    => ':attribute 不符合 :format 的格式',
    'different'      => ':attribute 和 :other 不能相同。',
    'digits'         => ':attribute 必須是  :digits  位數。',
    'digits_between' => ':attribute 必須在 :min 和 :max 位之間。',
    'email'          => ':attribute 必須是個有效的郵件地址。',
    'exists'         => '選擇的 :attribute 無效。',
    'image'          => ':attribute 必須是圖片。',
    'in'             => '選擇的 :attribute 無效。',
    'integer'        => ':attribute 必須是整數。',
    'ip'             => ':attribute 必須是壹個有效的 IP 地址。',
    'max'            => [
        'numeric' => ':attribute 不能大於 :max。',
        'file'    => ':attribute 不能大於 :max KB。',
        'string'  => ':attribute 不能大於 :max 個字符。',
        'array'   => ':attribute 不能超過 :max 個。',
    ],
    'mimes' => ':attribute 文件類型必須是 :values。',
    'min'   => [
        'numeric' => ':attribute 最少是  :min。',
        'file'    => ':attribute 至少需要 :min KB。',
        'string'  => ':attribute 最少需要 :min個字符。',
        'array'   => ':attribute 最少需要 :min 個。',
    ],
    'not_in'               => '選擇的 :attribute 無效。',
    'numeric'              => ':attribute 必須是數字。',
    'regex'                => ':attribute 格式無效。',
    'required'             => ':attribute 字段必填。',
    'required_if'          => ':attribute 項在 :other 是 :value 時是必須填寫的。',
    'required_with'        => '當含有 :values 時， :attribute 是必需的。',
    'required_with_all'    => '當含有 :values 時， :attribute 是必需的。',
    'required_without'     => '當 :values 不存在時， :attribute 是必需的。',
    'required_without_all' => '壹項:values 也沒有時 :attribute 區域是必填的。',
    'same'                 => ':attribute 和 :other  必需匹配。',
    'size'                 => [
        'numeric' => ':attribute 必須是  :size',
        'file'    => ':attribute 必須是 :size KB大小',
        'string'  => ':attribute 必須是 :size 個字符',
        'array'   => ':attribute 必須包含 :size 個',
    ],
    'string'   => ':attribute必須是壹個字符串。',
    'unique'   => ':attribute 已經被占用',
    'url'      => ':attribute 的格式無效',
    'timezone' => ':attribute 必須是個有效的區域。',

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
            'rule-name' => '自定義消息',
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
