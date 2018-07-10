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

    'accepted'   => ':attribute trebuie să fie acceptat.',
    'active_url' => ':attribute nu este un URL valid.',
    'after'      => ':attribute trebuie să fie o dată după :date.',
    'alpha'      => ':attribute poate să conțină numai litere.',
    'alpha_dash' => ':attribute poate să conțină numai litere, cifre şi semne de punctuație.',
    'alpha_num'  => ':attribute poate să conțină numai litere şi cifre.',
    'array'      => ':attribute trebuie să fie o matrice.',
    'before'     => ':attribute trebuie să fie o dată înainte de :date.',
    'between'    => [
        'numeric' => ':attribute trebuie să fie o dată înainte de :date.',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => ':attribute trebuie să aibă între :min şi :max elemente.',
    ],
    'boolean'        => ':attribute trebuie să aibă între :min şi :max elemente.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => ':attribute are o valoare duplicată.',
    'filled'         => 'Formatul :attribute nu este valid.',
    'image'          => ':attribute trebuie să fie o imagine.',
    'in'             => ':attribute trebuie să fie o imagine.',
    'in_array'       => 'Câmpul :attribute nu există în :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => ':attribute trebuie să fie un şir JSON valid.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute nu poate avea mai mult de :max elemente.',
    ],
    'mimes' => ':attribute nu poate avea mai mult de :max elemente.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute trebuie să aibă cel puţin :min kilobytes.',
        'string'  => ':attribute trebuie să aibă cel puţin :min kilobytes.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'Câmpul :attribute trebuie să fie prezent.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'Formatul :attribute nu este valid.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'Câmpul :attribute este necesar dacă :other nu există în :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'Câmpul :attribute este obligatoriu atunci când :values este prezent.',
    'required_without'     => 'Câmpul :attribute este obligatoriu atunci când :values este prezent.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => ':attribute trebuie să aibă :size kilobytes.',
        'string'  => ':attribute trebuie să aibă :size caractere.',
        'array'   => ':attribute trebuie să aibă :size caractere.',
    ],
    'string'   => 'The :attribute must contain :size items.',
    'timezone' => ':attribute trebuie să fie o zonă validă.',
    'unique'   => ':attribute este deja folosit.',
    'url'      => 'Formatul :attribute nu este valid.',

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
            'rule-name' => 'mesaj-personalizat',
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
