<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
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

    'accepted'             => ':attribute 必须是可以接受的。',
    'active_url'           => ':attribute 不是一个有效的URL网址。',
    'after'                => ':attribute 必须在 :date 之后。',
    'alpha'                => ':attribute 只能包含字母。',
    'alpha_dash'           => ':attribute 只能包含字母，数字和破折号。',
    'alpha_num'            => ':attribute 只允许包含字母和数字。',
    'array'                => ':attribute 必须是个数组。',
    'before'               => ':attribute 必须在 :date 之前。',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 到 :max 之间。',
        'file'    => ':attribute 必须在 :min 到 :max KB 之间。',
        'string'  => ':attribute 必须在 :min 到 :max 字符之间。',
        'array'   => ':attribute 必须在 :min 到 :max 个数目之间。',
    ],
    'boolean'              => ':attribute 必须为 true（正确） 或者 false（错误）',
    'confirmed'            => ':attribute 与确认项目不匹配',
    'date'                 => ':attribute 不是个有效日期',
    'date_format'          => ':attribute 不符合 :format 的格式',
    'different'            => ':attribute 和 :other 不能相同。',
    'digits'               => ':attribute 必须是  :digits  位数。',
    'digits_between'       => ':attribute 必须在 :min 和 :max 位之间。',
    'email'                => ':attribute 必须是个有效的邮件地址。',
    'exists'               => '选择的 :attribute 无效。',
    'image'                => ':attribute 必须是图片。',
    'in'                   => '选择的 :attribute 无效。',
    'integer'              => ':attribute 必须是整数。',
    'ip'                   => ':attribute 必须是一个有效的 IP 地址。',
    'max'                  => [
        'numeric' => ':attribute 不能大于 :max。',
        'file'    => ':attribute 不能大于 :max KB。',
        'string'  => ':attribute 不能大于 :max 个字符。',
        'array'   => ':attribute 不能超过 :max 个。',
    ],
    'mimes'                => ':attribute 文件类型必须是 :values。',
    'min'                  => [
        'numeric' => ':attribute 最少是  :min。',
        'file'    => ':attribute 至少需要 :min KB。',
        'string'  => ':attribute 最少需要 :min个字符。',
        'array'   => ':attribute 最少需要 :min 个。',
    ],
    'not_in'               => '选择的 :attribute 无效。',
    'numeric'              => ':attribute 必须是数字。',
    'regex'                => ':attribute 格式无效。',
    'required'             => ':attribute 字段必填。',
    'required_if'          => ':attribute 项在 :other 是 :value 时是必须填写的。',
    'required_with'        => '当含有 :values 时， :attribute 是必需的。',
    'required_with_all'    => '当含有 :values 时， :attribute 是必需的。',
    'required_without'     => '当 :values 不存在时， :attribute 是必需的。',
    'required_without_all' => '一项:values 也没有时 :attribute 区域是必填的。',
    'same'                 => ':attribute 和 :other  必需匹配。',
    'size'                 => [
        'numeric' => ':attribute 必须是  :size',
        'file'    => ':attribute 必须是 :size KB大小',
        'string'  => ':attribute 必须是 :size 个字符',
        'array'   => ':attribute 必须包含 :size 个',
    ],
    'string'               => 'The :attribute must be a string.',
    'unique'               => ':attribute 已经被占用',
    'url'                  => ':attribute 的格式无效',
    'timezone'             => ':attribute 必须是个有效的区域。',

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
            'rule-name' => '自定义消息',
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
