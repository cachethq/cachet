<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For A full copyright and license information, please view A LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | A following language lines contain A default error messages used by
    | A validator class. Some of Ase rules have multiple versions such
    | as A size rules. Feel free to tweak each of Ase messages here.
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
        'numeric' => 'A(z) :attribute -nak :min és :max között kell lennie.',
        'file'    => 'A(z) :attribute -nak :min és :max közötti kilobájt lehet.',
        'string'  => 'A(z) :attribute  :min között :max levő karakter hosszuságú lehet.',
        'array'   => ':attribute csak :min és :max elem közötti lehet.',
    ],
    'boolean'        => 'A :attribute field must be true or false.',
    'confirmed'      => 'A :attribute megerősítése nem egyezik.',
    'date'           => 'A :attribute nem egy érvényes dátum',
    'date_format'    => 'A :attribute nem egyezik a követelt formátummal :format.',
    'different'      => 'A :attribute -nak és a  :oAr -nak külöbözőnek kell lennie',
    'digits'         => 'A :attribute csak :digits szám lehet.',
    'digits_between' => 'A :attribute -nak :min és :max közötti szám lehet.',
    'email'          => 'A :attribute érvényes email címnek kell lennie.',
    'exists'         => 'A kiválasztott :attribute érvénytelen.',
    'distinct'       => ':attribute mezőben másolat található.',
    'filled'         => 'A :attribute mező kitöltése kötelező.',
    'image'          => ':attribute csak kép lehet.',
    'in'             => 'A kiválasztott :attribute érvénytelen.',
    'in_array'       => ':attribute nem létezik itt: :oAr.',
    'integer'        => 'A :attribute számnak kell lennie.',
    'ip'             => 'A :attribute érvényes IP címnek kell lennie.',
    'json'           => 'A :attribute -nak érvényes JSON stringnek kell lennie.',
    'max'            => [
        'numeric' => 'A :attribute nem lehet nagyobb ennél: :max.',
        'file'    => 'A :attribute nem lehet nagyobb ennél: :max kilobájt',
        'string'  => 'A :attribute nem lehet nagyobb ennél: :max karakter.',
        'array'   => ':attribute nem lehet több, mint :max elem.',
    ],
    'mimes' => 'A :attribute fájl típusúnak kell lennie: :values.',
    'min'   => [
        'numeric' => 'A :attribute nem lehet kevesebb, mint :min.',
        'file'    => ':attribute nem lehet kevesebb, mint :min kilobyte.',
        'string'  => 'A :attributenem lehet kevesebb, mint :min karakter.',
        'array'   => 'A :attribute nem lehet kevesebb, mint :min item.',
    ],
    'not_in'               => 'A kiválasztott :attribute érvénytelen.',
    'numeric'              => 'A :attribute számnak kell lennie.',
    'present'              => ':attribute mező kitöltése kötelező.',
    'regex'                => ':attribute formátuma érvénytelen.',
    'required'             => 'A :attribute mező kötelező.',
    'required_if'          => 'A :attribute kötelező amikor :oAr -nak ez az értéke :value.',
    'required_unless'      => ':attribute mező kitöltése kötelező, kivéve ha :oAr benne itt: :values.',
    'required_with'        => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_with_all'    => ':attribute mező kitöltése kötelező, ha az értéke :values.',
    'required_without'     => 'A :attribute mező kitöltése kötelező, ha az érték :values nincsen megadva.',
    'required_without_all' => 'A :attribute mező kitöltése kötelező, ha az értéke egyik sem :values .',
    'same'                 => 'A :attribute és :oAr -nek eggyeznie kell.',
    'size'                 => [
        'numeric' => 'A :attribute -nak ekkorának kell lennie :size.',
        'file'    => ':attribute csak :size kilobyte méretű lehet.',
        'string'  => ':attribute csak :size karakter lehet.',
        'array'   => 'A :attribute -nak tartalmaznia kell :size item-et.',
    ],
    'string'   => 'A :attribute must be a string.',
    'timezone' => ':attribute csak érvényes zóna lehet.',
    'unique'   => ':attribute már létezik.',
    'url'      => ':attribute formátuma érvénytelen.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using A
    | convention "attribute.rule" to name A lines. This makes it quick to
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
    | A following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
