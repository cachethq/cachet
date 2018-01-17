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
        'numeric' => ':attribute harus diantara :min dan :max.',
        'file'    => 'Atribut :harus antara :minimal dan :maksimal kilobyte.',
        'string'  => 'Atribut :harus antara :minimal dan :karakter maksimal.',
        'array'   => ':attribute harus antara :min dan :max item.',
    ],
    'boolean'        => 'Bidang atribut :harus benar atau salah.',
    'confirmed'      => 'Konfirmasi :atribut tidak cocok.',
    'date'           => 'Itu :atribut bukan tanggal yang valid.',
    'date_format'    => 'Itu :atribut tidak sesuai format :format.',
    'different'      => 'Itu :atribut dan :lainnya harus berbeda.',
    'digits'         => 'Atribut :harus :digit digit.',
    'digits_between' => 'Atribut :harus antara :minimal dan :maksimal digit.',
    'email'          => 'Atribut :harus berupa alamat email yang valid.',
    'exists'         => 'Yang dipilih :atribut tidak valid.',
    'distinct'       => ':attribute memiliki nilai duplikasi.',
    'filled'         => 'Bidang atribut :diperlukan.',
    'image'          => ':attribute harus merupakan gambar.',
    'in'             => 'Yang dipilih :atribut tidak valid.',
    'in_array'       => ':attribute tidak ada dalam :other.',
    'integer'        => 'Atribut :harus integer.',
    'ip'             => 'Atribut :harus alamat IP yang valid.',
    'json'           => ':attribute harus merupakan string JSON yang valid.',
    'max'            => [
        'numeric' => 'Atribut :mungkin tidak lebih besar dari :maksimal.',
        'file'    => 'Atribut :mungkin tidak lebih besar dari :maksimal kilobyte.',
        'string'  => 'Atribut :mungkin tidak lebih besar dari :maksimal karakter.',
        'array'   => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => 'Itu :atribut harus berupa jenis file:: nilai.',
    'min'   => [
        'numeric' => 'Atribut :minimal harus :minimal.',
        'file'    => ':attribute minimal harus :min kilobyte.',
        'string'  => 'Atribut :minimal harus :minimal karakter.',
        'array'   => 'Atribut :setidaknya harus memiliki :item minimal.',
    ],
    'not_in'               => 'Yang dipilih :atribut tidak valid.',
    'numeric'              => 'Atribut :harus berupa angka.',
    'present'              => ':attribute harus ada.',
    'regex'                => 'Format :attribute tidak benar.',
    'required'             => 'Bidang atribut :diperlukan.',
    'required_if'          => 'Atribut :diperlukan saat :lainnya adalah :nilai.',
    'required_unless'      => 'Bagian :attribute harus diisi kecuali :other :values.',
    'required_with'        => ':attribute harus diisi jika ada :values.',
    'required_with_all'    => ':attribute harus diisi jika ada :values.',
    'required_without'     => 'Atribut :diperlukan saat :nilai tidak ada.',
    'required_without_all' => 'Bidang atribut :diperlukan bila tidak ada :nilai yang ada.',
    'same'                 => 'Itu :atribut dan: lainnya harus cocok.',
    'size'                 => [
        'numeric' => 'Itu :atribut harus :berukuran.',
        'file'    => ':attribute harus :size kilobyte.',
        'string'  => ':attribute harus :size karakter.',
        'array'   => 'Atribut :harus berisi :item berukuran.',
    ],
    'string'   => 'Itu :atribut harus berupa string.',
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
