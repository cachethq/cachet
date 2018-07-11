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
        'numeric' => ':attribute harus merupakan tanngga sebelum :date.',
        'file'    => ':attribute harus diantara :min dan :max.',
        'string'  => 'Atribut :harus antara :minimal dan :maksimal kilobyte.',
        'array'   => ':attribute harus antara :min dan :max item.',
    ],
    'boolean'        => ':attribute harus antara :min dan :max item.',
    'confirmed'      => 'Bidang atribut :harus benar atau salah.',
    'date'           => 'Konfirmasi :atribut tidak cocok.',
    'date_format'    => 'Itu :atribut bukan tanggal yang valid.',
    'different'      => 'Itu :atribut tidak sesuai format :format.',
    'digits'         => 'Itu :atribut dan :lainnya harus berbeda.',
    'digits_between' => 'Atribut :harus :digit digit.',
    'email'          => 'Atribut :harus antara :minimal dan :maksimal digit.',
    'exists'         => 'Atribut :harus berupa alamat email yang valid.',
    'distinct'       => ':attribute memiliki nilai duplikasi.',
    'filled'         => 'Format :attribute tidak benar.',
    'image'          => ':attribute harus merupakan gambar.',
    'in'             => ':attribute harus merupakan gambar.',
    'in_array'       => ':attribute tidak ada dalam :other.',
    'integer'        => 'Yang dipilih :atribut tidak valid.',
    'ip'             => 'Atribut :harus integer.',
    'json'           => ':attribute harus merupakan string JSON yang valid.',
    'max'            => [
        'numeric' => 'Atribut :harus alamat IP yang valid.',
        'file'    => 'Atribut :mungkin tidak lebih besar dari :maksimal.',
        'string'  => 'Atribut :mungkin tidak lebih besar dari :maksimal kilobyte.',
        'array'   => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => ':attribute tidak boleh lebih dari :max item.',
    'min'   => [
        'numeric' => 'Itu :atribut harus berupa jenis file:: nilai.',
        'file'    => ':attribute minimal harus :min kilobyte.',
        'string'  => ':attribute minimal harus :min kilobyte.',
        'array'   => 'Atribut :minimal harus :minimal karakter.',
    ],
    'not_in'               => 'Atribut :setidaknya harus memiliki :item minimal.',
    'numeric'              => 'Yang dipilih :atribut tidak valid.',
    'present'              => ':attribute harus ada.',
    'regex'                => 'Atribut :harus berupa angka.',
    'required'             => 'Format :attribute tidak benar.',
    'required_if'          => 'Bidang atribut :diperlukan.',
    'required_unless'      => 'Bagian :attribute harus diisi kecuali :other :values.',
    'required_with'        => 'Atribut :diperlukan saat :lainnya adalah :nilai.',
    'required_with_all'    => ':attribute harus diisi jika ada :values.',
    'required_without'     => ':attribute harus diisi jika ada :values.',
    'required_without_all' => 'Atribut :diperlukan saat :nilai tidak ada.',
    'same'                 => 'Bidang atribut :diperlukan bila tidak ada :nilai yang ada.',
    'size'                 => [
        'numeric' => 'Itu :atribut dan: lainnya harus cocok.',
        'file'    => ':attribute harus :size kilobyte.',
        'string'  => ':attribute harus :size karakter.',
        'array'   => ':attribute harus :size karakter.',
    ],
    'string'   => 'Atribut :harus berisi :item berukuran.',
    'timezone' => ':attribute harus merupakan zona yang benar.',
    'unique'   => ':attribute sudah ada.',
    'url'      => 'Format :attribute tidak benar.',

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
