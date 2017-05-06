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
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => ':attribute harus antara :min dan :max item.',
    ],
    'boolean'        => 'The :attribute field must be true or false.',
    'confirmed'      => 'The :attribute confirmation does not match.',
    'date'           => 'The :attribute is not a valid date.',
    'date_format'    => 'The :attribute does not match the format :format.',
    'different'      => 'The :attribute and :other must be different.',
    'digits'         => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'email'          => 'The :attribute must be a valid email address.',
    'exists'         => 'The selected :attribute is invalid.',
    'distinct'       => ':attribute memiliki nilai duplikasi.',
    'filled'         => 'The :attribute field is required.',
    'image'          => ':attribute harus merupakan gambar.',
    'in'             => 'The selected :attribute is invalid.',
    'in_array'       => ':attribute tidak ada dalam :other.',
    'integer'        => 'The :attribute must be an integer.',
    'ip'             => 'The :attribute must be a valid IP address.',
    'json'           => ':attribute harus merupakan string JSON yang valid.',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => ':attribute minimal harus :min kilobyte.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => ':attribute harus ada.',
    'regex'                => 'Format :attribute tidak benar.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'Bagian :attribute harus diisi kecuali :other :values.',
    'required_with'        => ':attribute harus diisi jika ada :values.',
    'required_with_all'    => ':attribute harus diisi jika ada :values.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => ':attribute harus :size kilobyte.',
        'string'  => ':attribute harus :size karakter.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
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