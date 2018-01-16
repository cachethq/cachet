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
    'integer'        => 'Nitelik bir tamsayı olmalıdır.',
    'ip'             => ': Özniteliği geçerli bir IP adresi olmalıdır.',
    'json'           => ':attribute geçerli bir JSON dizini olmalıdır.',
    'max'            => [
        'numeric' => ': Özniteliği maksimumdan daha büyük olamaz.',
        'file'    => ': Özniteliği maksimum kilobaytdan daha büyük olamaz.',
        'string'  => ': Özniteliği maksimum karakterden daha büyük olamaz.',
        'array'   => ':attribute :max maddeden daha fazlasına sahip olamaz.',
    ],
    'mimes' => ': Özniteliği, değer türünde bir dosya olmalıdır.',
    'min'   => [
        'numeric' => ': Özelliği en azından: dakika olmalıdır.',
        'file'    => ':attribute en az :min kilobayt olmalıdır.',
        'string'  => ': Özelliği en az: minumum karakter olmalıdır.',
        'array'   => ': Özelliği en az: dakika öğesine sahip olmalıdır.',
    ],
    'not_in'               => 'Seçili :attribute geçersiz.',
    'numeric'              => ': Özniteliği bir sayı olmalıdır.',
    'present'              => ':attribute alanı mevcut olmalı.',
    'regex'                => ': Öznitelik biçimi geçersiz.',
    'required'             => ':attribute alanı gereklidir.',
    'required_if'          => ': Öznitelik alanı, şu durumlarda gereklidir: farklı değeri.',
    'required_unless'      => ': Öznitelik alanı, aşağıdaki koşullar haricinde: farkı değer içinde.',
    'required_with'        => ': Öznitelik alanı, şu durumlarda gereklidir: değerler mevcut.',
    'required_with_all'    => ': Öznitelik alanı, şu durumlarda gereklidir: değerler mevcut.',
    'required_without'     => ': Öznitelik alanı, şu durumlarda gereklidir: değerler mevcut değildir.',
    'required_without_all' => 'Öznitelik alanı, hiçbiri: değerleri mevcut olmadığında gereklidir.',
    'same'                 => ': Attribute ve: diğeri eşleşmelidir.',
    'size'                 => [
        'numeric' => ': Özniteliği: boyut olmalıdır.',
        'file'    => ': Özniteliği: boyutu kilobayt olmalıdır.',
        'string'  => ': Özniteliği: boyutu karakter olmalıdır.',
        'array'   => ': Özniteliği: boyut öğeleri içermelidir.',
    ],
    'string'   => ': Özniteliği bir dize olmalıdır.',
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
