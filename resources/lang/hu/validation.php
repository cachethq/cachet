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
        'numeric' => ':attribute csak :date előtti dátum lehet.',
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => ':attribute csak :min és :max elem közötti lehet.',
    ],
    'boolean'        => ':attribute csak :min és :max elem közötti lehet.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'The :attribute field has a duplicate value.',
    'filled'         => ':attribute formátuma érvénytelen.',
    'image'          => ':attribute csak kép lehet.',
    'in'             => ':attribute csak kép lehet.',
    'in_array'       => 'The :attribute field does not exist in :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => 'A :attribute -nak érvényes JSON stringnek kell lennie.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute nem lehet több, mint :max elem.',
    ],
    'mimes' => ':attribute nem lehet több, mint :max elem.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute nem lehet kevesebb, mint :min kilobyte.',
        'string'  => ':attribute nem lehet kevesebb, mint :min kilobyte.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => ':attribute formátuma érvénytelen.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_without'     => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => ':attribute csak :size kilobyte méretű lehet.',
        'string'  => ':attribute csak :size karakter lehet.',
        'array'   => ':attribute csak :size karakter lehet.',
    ],
    'string'   => 'The :attribute must contain :size items.',
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
