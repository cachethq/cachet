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
        'numeric' => ':attribute må være mellom :min og :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'        => ':attribute feltet må være true eller false.',
    'confirmed'      => ':attribute bekreftelsen samsvarer ikke.',
    'date'           => ':attribute er ikke en gyldig dato.',
    'date_format'    => ':attribute matcher ikke formatet :format.',
    'different'      => ':attribute og :other må være forskjellige.',
    'digits'         => ':attribute må være :digits sifre.',
    'digits_between' => ':attribute må være mellom :min og :max sifre.',
    'email'          => ':attribute må være en gyldig e-postadresse.',
    'exists'         => 'Valgt :attribute er uyldig.',
    'filled'         => ':attribute feltet kreves.',
    'image'          => ':attribute må være et bilde.',
    'in'             => 'Valgte :attribute er ugyldig.',
    'integer'        => ':attribute må være en integer.',
    'ip'             => ':attribute må være en gyldig IP-adresse.',
    'json'           => 'The :attribute must be a valid JSON string.',
    'max'            => [
        'numeric' => ':attribute kan ikke være større enn :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute må være en fil av typen :values.',
    'min'   => [
        'numeric' => ':attribute må være minst :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'Valgte :attribute er ugyldig.',
    'numeric'              => ':attribute må være et tall.',
    'regex'                => ':attribute formatet er ugyldig.',
    'required'             => ':attribute feltet kreves.',
    'required_if'          => ':attribute feltet kreves når :other er :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute feltet kreves når :values er til stede.',
    'required_with_all'    => ':attribute feltet kreves når :values er til stede.',
    'required_without'     => ':attribute feltet kreves når :values ikker er til stede.',
    'required_without_all' => ':attribute feltet kreves når ingen av :values er til stede.',
    'same'                 => ':attribute og :other må samsvare.',
    'size'                 => [
        'numeric' => ':attribute må være :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
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
