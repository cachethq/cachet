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

    'accepted'   => ':attribute 必须是可以接受的。',
    'active_url' => ':attribute 不是一个有效的URL网址。',
    'after'      => ':attribute 必须在 :date 之后。',
    'alpha'      => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母，数字和破折号。',
    'alpha_num'  => ':attribute 只允许包含字母和数字。',
    'array'      => ':attribute 必须是个数组。',
    'before'     => ':attribute 必须在 :date 之前。',
    'between'    => [
        'numeric' => ':attribute 必须在 :date 之前。',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => ':attribute 必须在 :min 到 :max 个数目之间。',
    ],
    'boolean'        => ':attribute 必须在 :min 到 :max 个数目之间。',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'The :attribute field has a duplicate value.',
    'filled'         => ':attribute 的格式无效',
    'image'          => ':attribute 必须是图片。',
    'in'             => ':attribute 必须是图片。',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => ':attribute 必须是规范的 JSON 字串。',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute 不能超过 :max 个。',
    ],
    'mimes' => ':attribute 不能超过 :max 个。',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute 至少需要 :min KB。',
        'string'  => ':attribute 至少需要 :min KB。',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => ':attribute 的格式无效',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => ':attribute 是必须的除非 :other 在 :values 中。',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => '当含有 :values 时， :attribute 是必需的。',
    'required_without'     => '当含有 :values 时， :attribute 是必需的。',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => ':attribute 必须是 :size KB大小',
        'string'  => ':attribute 必须是 :size 个字符',
        'array'   => ':attribute 必须是 :size 个字符',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => ':attribute 必须是个有效的区域。',
    'unique'   => ':attribute 已经被占用',
    'url'      => ':attribute 的格式无效',

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
