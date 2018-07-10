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

    'accepted'   => ':attribute må være godkjent.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after'      => ':attribute må være en dato etter :date.',
    'alpha'      => ':attribute kan kun inneholde bokstaver.',
    'alpha_dash' => ':attribute kan kun inneholde bokstaver, tall og bindestreker.',
    'alpha_num'  => ':attribute kan bare inneholde bokstaver og tall.',
    'array'      => ':attribute må være en matrise.',
    'before'     => ':attribute må være en dato før :date.',
    'between'    => [
        'numeric' => 'Attributt :attribute må være mellom :min og :max.',
        'file'    => ':attribute må være mellom :min og :max kilobytes.',
        'string'  => ':atribute må være mellom :min og :max tegn.',
        'array'   => ':attribute må være mellom :min og :max elementer.',
    ],
    'boolean'        => ':attribute feltet må være true eller false.',
    'confirmed'      => ':attribute bekreftelsen samsvarer ikke.',
    'date'           => ':attribute er ikke en gyldig dato.',
    'date_format'    => ':attribute passer ikke med formatet :format.',
    'different'      => ':attribute og :other må være forskjellige.',
    'digits'         => ':attribute må være :digits sifre.',
    'digits_between' => ':attribute må være mellom :min og :max sifre.',
    'email'          => ':attribute må være en gyldig e-postadresse.',
    'exists'         => 'Valgte :attribute er ugyldig.',
    'distinct'       => ':attribute har en duplikat verdi.',
    'filled'         => 'Feltet :attribute er påkrevd.',
    'image'          => ':attribute må være et bilde.',
    'in'             => 'Valgte :attribute er ugyldig.',
    'in_array'       => ':attribute feltet finnes ikke i :other.',
    'integer'        => ':attribute må være et heltall.',
    'ip'             => ':attribute må være en gyldig IP-adresse.',
    'json'           => ':attribute må være en gyldig JSON streng.',
    'max'            => [
        'numeric' => ':attribute kan ikke være større enn :max.',
        'file'    => ':attribute kan ikke være større enn :max kilobyte.',
        'string'  => ':attribute kan ikke være større enn :max tegn.',
        'array'   => ':attribute kan ikke har mer enn :max elementer.',
    ],
    'mimes' => ':attribute må være en fil av typen: :values.',
    'min'   => [
        'numeric' => ':attribute må være minst :min.',
        'file'    => ':attribute må være minst :min kilobyte.',
        'string'  => ':attribute må ha minst :min tegn.',
        'array'   => ':attribute må ha minst :min elementer.',
    ],
    'not_in'               => 'Valgte :attribute er ugyldig.',
    'numeric'              => ':attribute må være et nummer.',
    'present'              => ':attribute må finnes.',
    'regex'                => ':attribute formatet er ugyldig.',
    'required'             => 'Feltet :attribute er påkrevd.',
    'required_if'          => ':attribute er påkrevd når :other er :value.',
    'required_unless'      => 'Feltet :attribute kreves med mindre :other er :values.',
    'required_with'        => ':attribute feltet kreves når :values er til stede.',
    'required_with_all'    => ':attribute feltet kreves når :values er til stede.',
    'required_without'     => ':attribute er påkrevd når :values ikke er tilstede.',
    'required_without_all' => ':attribute kreves når ingen av :values er tilstede.',
    'same'                 => ':attribute og :other må være like.',
    'size'                 => [
        'numeric' => ':attribute må være :size.',
        'file'    => ':attribute må være :size kilobyte.',
        'string'  => ':attribute må være :size tegn.',
        'array'   => ':attribute må inneholde :size elementer.',
    ],
    'string'   => ':attribute må være en tekst.',
    'timezone' => ':attribute må være en gyldig tidssone.',
    'unique'   => ':attribute er allerede tatt.',
    'url'      => ':attribute formatet er ugyldig.',

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
            'rule-name' => 'tilpasset melding',
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
