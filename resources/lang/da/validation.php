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

    'accepted'   => ':attribute Skal accepteres.',
    'active_url' => ':attribute er ikke en valid URL.',
    'after'      => ':attribute skal være efter den :date.',
    'alpha'      => ':attribute må kun indeholde bogstaver.',
    'alpha_dash' => ':attribute må kun indeholde bogstaver, tal og bindestreger.',
    'alpha_num'  => ':attribute må kun indeholde tal og bogstaver.',
    'array'      => ':attribute skal være et array.',
    'before'     => ':attribute skal være før den :date.',
    'between'    => [
        'numeric' => ':attribute skal være mellem :min og :max.',
        'file'    => ':attribute skal være mellem :min og :max kilobytes.',
        'string'  => ':attribute skal være mellem :min og :max karakterer.',
        'array'   => ':attribute skal have mellem :min og :max emner.',
    ],
    'boolean'        => ':attribute feltet skal være enten sandt eller falsk.',
    'confirmed'      => ':attribute konfirmationen matcher ikke.',
    'date'           => ':attribute er ikke en gyldig dato.',
    'date_format'    => ':attribute er ikke i formatet :format.',
    'different'      => ':attribute og :other skal være forskellige.',
    'digits'         => ':attribute skal være et :digits cifret tal.',
    'digits_between' => ':attribute skal være mellem :min og :max tal.',
    'email'          => ':attribute skal være en gyldig email-adresse.',
    'exists'         => 'Den valgte :attribute er ikke gyldig.',
    'filled'         => ':attribute skal udfyldes.',
    'image'          => ':attribute skal være et billede.',
    'in'             => 'Den valgte :attribute er ugyldig.',
    'integer'        => ':attribute skal være et tal.',
    'ip'             => ':attribute skal være en ip-adresse.',
    'json'           => ':attribute skal være en gyldig JSON streng.',
    'max'            => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file'    => ':attribute må ikke være større end :max kilobytes.',
        'string'  => ':attribute må ikke være større end :max karakterer.',
        'array'   => ':attribute må ikke have mere end :max emner.',
    ],
    'mimes' => ':attribute skal være en fil af typen: :values.',
    'min'   => [
        'numeric' => ':attribute skal være mindst :min.',
        'file'    => ':attribute skal være mindst :min kilobytes.',
        'string'  => ':attribute skal være mindst :min karakterer.',
        'array'   => ':attribute skal have mindst :min emner.',
    ],
    'not_in'               => 'Det valgte :attribute er ikke gyldigt.',
    'numeric'              => ':attribute skal være et tal.',
    'regex'                => ':attribute er ikke korrekt formateret.',
    'required'             => ':attribute skal udfyldes.',
    'required_if'          => ':attribute skal udfyldes når :other er :value.',
    'required_with'        => ':attribute skal udfyldes når :values er present.',
    'required_with_all'    => ':attribute skal udfyldes når :values er present.',
    'required_without'     => ':attribute skal udfyldes når :values ikke er sat.',
    'required_without_all' => ':attribute skal udfyldes når ingen af :values er sat.',
    'same'                 => ':attribute og :other skal være ens.',
    'size'                 => [
        'numeric' => ':attribute skal være :size.',
        'file'    => ':attribute skal være :size kilobytes.',
        'string'  => ':attribute skal være :size karakterer.',
        'array'   => ':attribute skal indeholde :size emner.',
    ],
    'string'   => ':attribute skal være en streng.',
    'timezone' => ':attribute skal være en gyldig zone.',
    'unique'   => ':attribute er allerede i brug.',
    'url'      => ':attribute er ikke gyldigt formateret.',

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
