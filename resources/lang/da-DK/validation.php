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
        'numeric' => ':attribute skal være før den :date.',
        'file'    => ':attribute skal være mellem :min og :max.',
        'string'  => ':attribute skal være mellem :min og :max kilobytes.',
        'array'   => ':attribute skal have mellem :min og :max emner.',
    ],
    'boolean'        => ':attribute skal have mellem :min og :max emner.',
    'confirmed'      => ':attribute feltet skal være enten sandt eller falsk.',
    'date'           => ':attribute og bekræftelse er ikke ens.',
    'date_format'    => ':attribute er ikke en gyldig dato.',
    'different'      => ':attribute er ikke i formatet :format.',
    'digits'         => ':attribute og :other skal være forskellige.',
    'digits_between' => ':attribute skal være :digits cifre.',
    'email'          => ':attribute skal være mellem :min og :max cifre.',
    'exists'         => ':attribute skal være en gyldig email-adresse.',
    'distinct'       => ':attribute feltet har en duplikeret værdi.',
    'filled'         => 'Formatet af :attribute er ugyldigt.',
    'image'          => ':attribute skal være et billede.',
    'in'             => ':attribute skal være et billede.',
    'in_array'       => ':attribute feltet findes ikke i :other.',
    'integer'        => ':attribute er ikke gyldig.',
    'ip'             => ':attribute skal være et heltal.',
    'json'           => ':attribute skal være en gyldig JSON streng.',
    'max'            => [
        'numeric' => ':attribute skal være en gyldig IP-adresse.',
        'file'    => ':attribute må ikke være større end :max.',
        'string'  => ':attribute må ikke overstige :max kilobytes.',
        'array'   => ':attribute må ikke have mere end :max emner.',
    ],
    'mimes' => ':attribute må ikke have mere end :max emner.',
    'min'   => [
        'numeric' => ':attribute skal være en fil af typen: :values.',
        'file'    => ':attribute skal være mindst :min kilobytes.',
        'string'  => ':attribute skal være mindst :min kilobytes.',
        'array'   => ':attribute skal være mindst :min karakterer.',
    ],
    'not_in'               => ':attribute skal have mindst :min elementer.',
    'numeric'              => ':attribute er ikke gyldig.',
    'present'              => ':attribute feltet skal være til stede.',
    'regex'                => ':attribute skal være et tal.',
    'required'             => 'Formatet af :attribute er ugyldigt.',
    'required_if'          => ':attribute skal udfyldes.',
    'required_unless'      => ':attribute feltet er påkrævet, medmindre :other er i :values.',
    'required_with'        => ':attribute feltet er påkrævet når :other er :value.',
    'required_with_all'    => 'Feltet :attribute er krævet når :values eksisterer.',
    'required_without'     => 'Feltet :attribute er krævet når :values eksisterer.',
    'required_without_all' => ':attribute feltet er påkrævet når :values ikke findes.',
    'same'                 => ':attribute er påkrævet når ingen af :values er defineret.',
    'size'                 => [
        'numeric' => ':attribute og :other skal være éns.',
        'file'    => ':attribute skal være :size kilobytes.',
        'string'  => ':attribute skal være :size karakterer.',
        'array'   => ':attribute skal være :size karakterer.',
    ],
    'string'   => ':attribute skal indeholde :size emner.',
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
