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
        'numeric' => ':attribute csak :min és :max közötti lehet.',
        'file'    => ':attribute csak :min és :max kilobyte közötti lehet.',
        'string'  => ':attribute csak :min és :max karakterszám közötti lehet.',
        'array'   => ':attribute csak :min és :max elem közötti lehet.',
    ],
    'boolean'        => ':attribute csak igaz vagy hamis lehet.',
    'confirmed'      => ':attribute megerősítése nem egyezik.',
    'date'           => ':attribute nem érvényes dátum.',
    'date_format'    => ':attribute formátuma csak :format lehet.',
    'different'      => ':attribute és :other csak különbözőek lehetnek.',
    'digits'         => ':attribute csak :digits számjegy lehet.',
    'digits_between' => ':attribute csak :min és :max között számjegy lehet.',
    'email'          => ':attribute csak érvényes e-mail cím lehet.',
    'exists'         => 'A kiválasztott :attribute érvénytelen.',
    'filled'         => ':attribute mező kitöltése kötelező.',
    'image'          => ':attribute csak kép lehet.',
    'in'             => 'A kiválasztott :attribute érvénytelen.',
    'integer'        => ':attribute csak szám lehet.',
    'ip'             => ':attribute csak érvényes IP cím lehet.',
    'json'           => 'A :attribute -nak érvényes JSON stringnek kell lennie.',
    'max'            => [
        'numeric' => ':attribute nem lehet nagyobb, mint :max.',
        'file'    => ':attribute nem lehet nagyobb, mint :max kilobyte.',
        'string'  => ':attribute nem lehet hosszabb, mint :max karakter.',
        'array'   => ':attribute nem lehet több, mint :max elem.',
    ],
    'mimes' => ':attribute csak :values fájltípus lehet.',
    'min'   => [
        'numeric' => ':attribute nem lehet kevesebb, mint :min.',
        'file'    => ':attribute nem lehet kevesebb, mint :min kilobyte.',
        'string'  => ':attribute nem lehet kevesebb, mint :min karakter.',
        'array'   => ':attribute nem lehet kevesebb, mint :min elem.',
    ],
    'not_in'               => 'A kiválasztott :attribute érvénytelen.',
    'numeric'              => ':attribute csak szám lehet.',
    'regex'                => ':attribute formátuma érvénytelen.',
    'required'             => ':attribute mező kitöltése kötelező.',
    'required_if'          => ':attribute mező kitöltése kötelező, ha :other mező értéke :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_with_all'    => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_without'     => ':attribute mező kitöltése kötelező, ha az értéke nem :values.',
    'required_without_all' => ':attribute mező kitöltése kötelező, ha az értéke nem :values.',
    'same'                 => ':attribute és :other meg kell egyezzen.',
    'size'                 => [
        'numeric' => ':attribute csak :size méretű lehet.',
        'file'    => ':attribute csak :size kilobyte méretű lehet.',
        'string'  => ':attribute csak :size karakter lehet.',
        'array'   => ':attribute tartalmaznia kell :size elemeit.',
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
