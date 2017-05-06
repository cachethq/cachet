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

    'accepted'   => ':attribute kabul edilmeli.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after'      => ':attribtute ,  :date tarihinden sonra bir tarih olmalıdır.',
    'alpha'      => ':attribute sadece harf içerebilir.',
    'alpha_dash' => ':attribute sadece harf, sayı ve kısa çizgi içerebilir.',
    'alpha_num'  => ':attribute sadece harf ve sayı içerebilir.',
    'array'      => ':attribute bir dizi olmalıdır.',
    'before'     => ':attribute,  :date tarihinden önce bir tarih olmalıdır.',
    'between'    => [
        'numeric' => ':attribute :min ve :max arasında olmalıdır.',
        'file'    => ':attribute :min ve :max kilobayt arasında olmalıdır.',
        'string'  => ':attribute :min ve :max karakter arasında olmalıdır.',
        'array'   => ':attribute en az :min en fazla :max maddeye sahip olmalı.',
    ],
    'boolean'        => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed'      => ':attribute doğrulaması eşleşmiyor.',
    'date'           => ':attribute geçersiz bir tarih.',
    'date_format'    => ':attribute :format formatı ile eşleşmiyor.',
    'different'      => ':attribute ve :other farklı olmalıdır.',
    'digits'         => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute :min ve :max rakam arasında olmalıdır.',
    'email'          => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'exists'         => 'Seçili :attribute geçersiz.',
    'distinct'       => ':attribute alanında yinelenen bir değer var.',
    'filled'         => ':attribute alanı gereklidir.',
    'image'          => ':attribute bir görsel olmalı.',
    'in'             => 'Seçili :attribute geçersiz.',
    'in_array'       => ':attribute alanı :other ile eşleşmiyor.',
    'integer'        => 'The :attribute must be an integer.',
    'ip'             => 'The :attribute must be a valid IP address.',
    'json'           => ':attribute geçerli bir JSON dizini olmalıdır.',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute :max maddeden daha fazlasına sahip olamaz.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => ':attribute en az :min kilobayt olmalıdır.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'Seçili :attribute geçersiz.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => ':attribute alanı mevcut olmalı.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => ':attribute alanı gereklidir.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
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
            'rule-name' => 'özel-mesaj',
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