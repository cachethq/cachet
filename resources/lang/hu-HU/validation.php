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

    'accepted'   => ':attribute el kell fogadni.',
    'active_url' => ':attribute nem érvényes URL.',
    'after'      => ':attribute csak :date utáni dátum lehet.',
    'alpha'      => ':attribute csak betűket tartalmazhat.',
    'alpha_dash' => ':attribute csak betűket, számokat és kötőjelet tartalmazhat.',
    'alpha_num'  => ':attribute csak betűket és számokat tartalmazhat.',
    'array'      => ':attribute csak tömb típusú lehet.',
    'before'     => ':attribute csak :date előtti dátum lehet.',
    'between'    => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => ':attribute csak :min és :max elem közötti lehet.',
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
    'distinct'       => ':attribute mezőben másolat található.',
    'filled'         => 'The :attribute field is required.',
    'image'          => ':attribute csak kép lehet.',
    'in'             => 'The selected :attribute is invalid.',
    'in_array'       => ':attribute nem létezik itt: :other.',
    'integer'        => 'The :attribute must be an integer.',
    'ip'             => 'The :attribute must be a valid IP address.',
    'json'           => 'A :attribute -nak érvényes JSON stringnek kell lennie.',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute nem lehet több, mint :max elem.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => ':attribute nem lehet kevesebb, mint :min kilobyte.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => ':attribute mező kitöltése kötelező.',
    'regex'                => ':attribute formátuma érvénytelen.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => ':attribute mező kitöltése kötelező, kivéve ha :other benne itt: :values.',
    'required_with'        => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_with_all'    => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => ':attribute csak :size kilobyte méretű lehet.',
        'string'  => ':attribute csak :size karakter lehet.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
    'timezone' => ':attribute csak érvényes zóna lehet.',
    'unique'   => ':attribute már létezik.',
    'url'      => ':attribute formátuma érvénytelen.',

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
            'rule-name' => 'Egyéni üzenet',
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
