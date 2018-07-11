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
        'numeric' => ':attribute,  :date tarihinden önce bir tarih olmalıdır.',
        'file'    => ':attribute :min ve :max arasında olmalıdır.',
        'string'  => ':attribute :min ve :max kilobayt arasında olmalıdır.',
        'array'   => ':attribute en az :min en fazla :max maddeye sahip olmalı.',
    ],
    'boolean'        => ':attribute en az :min en fazla :max maddeye sahip olmalı.',
    'confirmed'      => ':attribute alanı doğru veya yanlış olmalıdır.',
    'date'           => ':attribute doğrulaması eşleşmiyor.',
    'date_format'    => ':attribute geçersiz bir tarih.',
    'different'      => ':attribute :format formatı ile eşleşmiyor.',
    'digits'         => ':attribute ve :other farklı olmalıdır.',
    'digits_between' => ':attribute :digits rakam olmalıdır.',
    'email'          => ':attribute :min ve :max rakam arasında olmalıdır.',
    'exists'         => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'distinct'       => ':attribute alanında yinelenen bir değer var.',
    'filled'         => ': Öznitelik biçimi geçersiz.',
    'image'          => ':attribute bir görsel olmalı.',
    'in'             => ':attribute bir görsel olmalı.',
    'in_array'       => ':attribute alanı :other ile eşleşmiyor.',
    'integer'        => 'Seçili :attribute geçersiz.',
    'ip'             => 'Nitelik bir tamsayı olmalıdır.',
    'json'           => ':attribute geçerli bir JSON dizini olmalıdır.',
    'max'            => [
        'numeric' => ': Özniteliği geçerli bir IP adresi olmalıdır.',
        'file'    => ': Özniteliği maksimumdan daha büyük olamaz.',
        'string'  => ': Özniteliği maksimum kilobaytdan daha büyük olamaz.',
        'array'   => ':attribute :max maddeden daha fazlasına sahip olamaz.',
    ],
    'mimes' => ':attribute :max maddeden daha fazlasına sahip olamaz.',
    'min'   => [
        'numeric' => ': Özniteliği, değer türünde bir dosya olmalıdır.',
        'file'    => ':attribute en az :min kilobayt olmalıdır.',
        'string'  => ':attribute en az :min kilobayt olmalıdır.',
        'array'   => ': Özelliği en az: minumum karakter olmalıdır.',
    ],
    'not_in'               => ': Özelliği en az: dakika öğesine sahip olmalıdır.',
    'numeric'              => 'Seçili :attribute geçersiz.',
    'present'              => ':attribute alanı mevcut olmalı.',
    'regex'                => ': Özniteliği bir sayı olmalıdır.',
    'required'             => ': Öznitelik biçimi geçersiz.',
    'required_if'          => ':attribute alanı gereklidir.',
    'required_unless'      => ': Öznitelik alanı, aşağıdaki koşullar haricinde: farkı değer içinde.',
    'required_with'        => ': Öznitelik alanı, şu durumlarda gereklidir: farklı değeri.',
    'required_with_all'    => ': Öznitelik alanı, şu durumlarda gereklidir: değerler mevcut.',
    'required_without'     => ': Öznitelik alanı, şu durumlarda gereklidir: değerler mevcut.',
    'required_without_all' => ': Öznitelik alanı, şu durumlarda gereklidir: değerler mevcut değildir.',
    'same'                 => 'Öznitelik alanı, hiçbiri: değerleri mevcut olmadığında gereklidir.',
    'size'                 => [
        'numeric' => ': Attribute ve: diğeri eşleşmelidir.',
        'file'    => ': Özniteliği: boyutu kilobayt olmalıdır.',
        'string'  => ': Özniteliği: boyutu karakter olmalıdır.',
        'array'   => ': Özniteliği: boyutu karakter olmalıdır.',
    ],
    'string'   => ': Özniteliği: boyut öğeleri içermelidir.',
    'timezone' => ': Özniteliği geçerli bir bölge olmalıdır.',
    'unique'   => ': Öznitelik zaten alındı.',
    'url'      => ': Öznitelik biçimi geçersiz.',

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
