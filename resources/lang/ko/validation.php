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
        'numeric' => ':attribute 는 :min 과 :max 사이어야 합니다.',
        'file'    => ':attribute 는 최소 :min 최대 :max kilobytes 여야 합니다.',
        'string'  => ':attribute 는 최소 :min 최대 :max 자 여야 합니다.',
        'array'   => ':attribute 는 :min 과 :max 사이의 항목을 가져야 합니다.',
    ],
    'boolean'        => ':attribute 필드는 true 또는 false 여야 합니다.',
    'confirmed'      => ':attribute 가 일치하지 않습니다.',
    'date'           => ':attribute 는 올바른 날짜가 아닙니다.',
    'date_format'    => ':attribute 가 :format 형식과 일치하지 않습니다.',
    'different'      => ':attribute 와 :other 는 달라야합니다.',
    'digits'         => ':attribute 는 :digits 자리 숫자 여야 합니다.',
    'digits_between' => ':attribute 는 :min 과 :max 사이의 숫자 여야 합니다.',
    'email'          => ':attribute 는 유효한 이메일 주소 여야 합니다.',
    'exists'         => '선택된 :attribute 가 유효하지 않습니다.',
    'image'          => ':attribute 는 이미지여야 합니다.',
    'in'             => '선택된 :attribute 는 유효하지 않습니다.',
    'integer'        => ':attribute 는 정수 여야 합니다.',
    'ip'             => ':attribute 는 유효한 IP 주소 여야 합니다.',
    'max'            => [
        'numeric' => ':attribute 는 :max 보다 클 수 없습니다.',
        'file'    => ':attribute 는 :max kilobytes 보다 클 수 없습니다.',
        'string'  => ':attribute 는 :max 자의 문자보다 클 수 없습니다.',
        'array'   => ':attribute 는 :max 개 이상의 항목을 가질 수 없습니다.',
    ],
    'mimes' => ':attribute 는 :values 타입의 파일어야 합니다.',
    'min'   => [
        'numeric' => ':attribute 는 최소 :min 이상이어야 합니다.',
        'file'    => ':attribute 는 최소 :min kilobytes 여야 합니다.',
        'string'  => ':attribute 는 최소 :min 자의 문자 여야 합니다.',
        'array'   => ':attribute 는 최소 :min 항목을 가져야 합니다.',
    ],
    'not_in'               => '선택된 :attribute 는 유효하지 않습니다.',
    'numeric'              => ':attribute 는 숫자 여야 합니다.',
    'regex'                => ':attribute 의 형식이 올바르지 않습니다.',
    'required'             => ':attribute 필드는 필수 항목입니다.',
    'required_if'          => ':attribute 필드는 :other 가 :value 일 때 필요합니다.',
    'required_with'        => ':attribute 는 :values 가 존재할 때 필요합니다.',
    'required_with_all'    => ':attribute 는 :values 가 존재할 때 필요합니다.',
    'required_without'     => ':attribute 는 :values 가 존재하지 않을 때 필요합니다.',
    'required_without_all' => ':attribute 는 :values 중 아무 것도 존재하지 않을 때 필요합니다.',
    'same'                 => ':attribute 와 :other 는 일치해야 합니다.',
    'size'                 => [
        'numeric' => ':attribute 는 :size 크기 여야 합니다.',
        'file'    => ':attribute 는 :size kilobytes 여야 합니다.',
        'string'  => ':attribute 는 :size 자의 문자여야 합니다.',
        'array'   => ':attribute 는 :size 개의 항목을 포함해야 합니다.',
    ],
    'string'   => ':attribute 는 문자열 이어야 합니다.',
    'unique'   => ':attribute 는 이미 사용되었습니다.',
    'url'      => ':attribute 형식이 올바르지 않습니다.',
    'timezone' => ':attribute 는 유효한 영역이어야 합니다.',

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
