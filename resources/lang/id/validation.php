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

    'accepted'   => 'Anda harus menerima :attribute .',
    'active_url' => ':attribute bukan merupakan URL yang benar.',
    'after'      => ':attribute harus merupakan tanggal setelah :date.',
    'alpha'      => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka dan tanda minus.',
    'alpha_num'  => ':attribute hanya boleh berisi huruf dan angka.',
    'array'      => ':attribute harus merupakan array.',
    'before'     => ':attribute harus merupakan tanngga sebelum :date.',
    'between'    => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file'    => ':attribute harus antara :min dan :max kilobyte.',
        'string'  => ':attribute harus antara :min dan :max karakter.',
        'array'   => ':attribute harus antara :min dan :max item.',
    ],
    'boolean'        => 'Kotak :attribute harus berupa true atau false.',
    'confirmed'      => 'Kedua :attribute tidak sama.',
    'date'           => ':attribute bukan merupakan tanggal yang benar.',
    'date_format'    => ':attribute tidak sesuai dengan format :format.',
    'different'      => ':attribute dan :other harus beda.',
    'digits'         => ':attribute harus terdiri dari :digits digit.',
    'digits_between' => ':attribute harus antara :min dan :max digit.',
    'email'          => ':attribute harus merupakan alamat email yang benar.',
    'exists'         => ':attribute yang dipilih tidak benar.',
    'image'          => ':attribute harus merupakan gambar.',
    'in'             => ':attribute yang dipilih tidak benar.',
    'integer'        => ':attribute harus merupakan bilangan bulat.',
    'ip'             => ':attribute harus merupakan alamat IP yang benar.',
    'max'            => [
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'file'    => ':attribute tidak boleh lebih dari :max kilobyte.',
        'string'  => ':attribute tidak boleh lebih dari :max karakter.',
        'array'   => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => ':attribute harus merupakan jenis berkas: :values.',
    'min'   => [
        'numeric' => ':attribute minimal harus :min.',
        'file'    => ':attribute minimal harus :min kilobyte.',
        'string'  => ':attribute minimal harus :min karakter.',
        'array'   => ':attribute minimal harus :min item.',
    ],
    'not_in'               => ':attribute yang dipilih tidak benar.',
    'numeric'              => ':attribute harus merupakan angka.',
    'regex'                => 'Format :attribute tidak benar.',
    'required'             => ':attribute belum diisi.',
    'required_if'          => ':attribute harus diisi jika :other :value.',
    'required_with'        => ':attribute harus diisi jika ada :values.',
    'required_with_all'    => ':attribute harus diisi jika ada :values.',
    'required_without'     => ':attribute harus diisi jika tidak ada :values .',
    'required_without_all' => ':attribute harus diisi jika tidak ada :values .',
    'same'                 => ':attribute dan :other tidak sesuai.',
    'size'                 => [
        'numeric' => ':attribute harus :size.',
        'file'    => ':attribute harus :size kilobyte.',
        'string'  => ':attribute harus :size karakter.',
        'array'   => ':attribute harus berisi :size item.',
    ],
    'string'   => 'The :attribute must be a string.',
    'unique'   => ':attribute sudah ada.',
    'url'      => 'Format :attribute tidak benar.',
    'timezone' => ':attribute harus merupakan zona yang benar.',

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
            'rule-name' => 'custom-message',
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
