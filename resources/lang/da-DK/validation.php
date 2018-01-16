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

    'accepted'   => ':attribute skal accepteres.',
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
    'confirmed'      => ':attribute og bekræftelse er ikke ens.',
    'date'           => ':attribute er ikke en gyldig dato.',
    'date_format'    => ':attribute er ikke i formatet :format.',
    'different'      => ':attribute og :other skal være forskellige.',
    'digits'         => ':attribute skal være :digits cifre.',
    'digits_between' => ':attribute skal være mellem :min og :max cifre.',
    'email'          => ':attribute skal være en gyldig email-adresse.',
    'exists'         => ':attribute er ikke gyldig.',
    'distinct'       => ':attribute feltet har en duplikeret værdi.',
    'filled'         => ':attribute skal udfyldes.',
    'image'          => ':attribute skal være et billede.',
    'in'             => ':attribute er ikke gyldig.',
    'in_array'       => ':attribute feltet findes ikke i :other.',
    'integer'        => ':attribute skal være et heltal.',
    'ip'             => ':attribute skal være en gyldig IP-adresse.',
    'json'           => ':attribute skal være en gyldig JSON streng.',
    'max'            => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file'    => ':attribute må ikke overstige :max kilobytes.',
        'string'  => ':attribute må ikke være længere end :max karakterer.',
        'array'   => ':attribute må ikke have mere end :max emner.',
    ],
    'mimes' => ':attribute skal være en fil af typen: :values.',
    'min'   => [
        'numeric' => ':attribute skal være mindst :min.',
        'file'    => ':attribute skal være mindst :min kilobytes.',
        'string'  => ':attribute skal være mindst :min karakterer.',
        'array'   => ':attribute skal have mindst :min elementer.',
    ],
    'not_in'               => ':attribute er ikke gyldig.',
    'numeric'              => ':attribute skal være et tal.',
    'present'              => ':attribute feltet skal være til stede.',
    'regex'                => 'Formatet af :attribute er ugyldigt.',
    'required'             => ':attribute skal udfyldes.',
    'required_if'          => ':attribute feltet er påkrævet når :other er :value.',
    'required_unless'      => ':attribute feltet er påkrævet, medmindre :other er i :values.',
    'required_with'        => 'Feltet :attribute er krævet når :values eksisterer.',
    'required_with_all'    => 'Feltet :attribute er krævet når :values eksisterer.',
    'required_without'     => ':attribute feltet er påkrævet når :values ikke findes.',
    'required_without_all' => ':attribute er påkrævet når ingen af :values er defineret.',
    'same'                 => ':attribute og :other skal være éns.',
    'size'                 => [
        'numeric' => ':attribute skal være :size.',
        'file'    => ':attribute skal være :size kilobytes.',
        'string'  => ':attribute skal være :size karakterer.',
        'array'   => ':attribute skal indeholde :size emner.',
    ],
    'string'   => ':attribute skal være en streng.',
    'timezone' => ':attribute skal være en gyldig zone.',
    'unique'   => ':attribute er allerede i brug.',
    'url'      => 'Formatet af :attribute er ugyldigt.',

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
            'rule-name' => 'tilpasset-besked',
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
