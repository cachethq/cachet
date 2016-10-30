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

    'accepted'   => ':attribute 는 허용되어야 합니다.',
    'active_url' => ':attribute 는 올바른 URL이 아닙니다.',
    'after'      => ':attribute 는 :date 이후의 날짜 여야 합니다.',
    'alpha'      => ':attribute 는 문자만 포함할 수 있습니다.',
    'alpha_dash' => ':attribute 는 문자, 숫자, -만 포함할 수 있습니다.',
    'alpha_num'  => ':attribute 는 문자와 숫자만 포함할 수 있습니다.',
    'array'      => ':attribute 는 배열이어야 합니다.',
    'before'     => ':attribute 는 :date 이전의 날짜 여야 합니다.',
    'between'    => [
        'numeric' => ':attribute 는 :date 이전의 날짜 여야 합니다.',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => ':attribute 는 :min 과 :max 사이의 항목을 가져야 합니다.',
    ],
    'boolean'        => ':attribute 는 :min 과 :max 사이의 항목을 가져야 합니다.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'The :attribute field has a duplicate value.',
    'filled'         => ':attribute 형식이 올바르지 않습니다.',
    'image'          => ':attribute 는 이미지여야 합니다.',
    'in'             => ':attribute 는 이미지여야 합니다.',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => ':attribute 는 유효한 JSON 문자열이어야 합니다.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute 는 :max 개 이상의 항목을 가질 수 없습니다.',
    ],
    'mimes' => ':attribute 는 :max 개 이상의 항목을 가질 수 없습니다.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute 는 최소 :min kilobytes 여야 합니다.',
        'string'  => ':attribute 는 최소 :min kilobytes 여야 합니다.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => ':attribute 형식이 올바르지 않습니다.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => ':attribute 는 :values 가 존재할 때 필요합니다.',
    'required_without'     => ':attribute 는 :values 가 존재할 때 필요합니다.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => ':attribute 는 :size kilobytes 여야 합니다.',
        'string'  => ':attribute 는 :size 자의 문자여야 합니다.',
        'array'   => ':attribute 는 :size 자의 문자여야 합니다.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => ':attribute 는 유효한 영역이어야 합니다.',
    'unique'   => ':attribute 는 이미 사용되었습니다.',
    'url'      => ':attribute 형식이 올바르지 않습니다.',

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
            'rule-name' => '사용자 정의 메세지',
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
