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

    'accepted'   => ':attribute måste accepteras.',
    'active_url' => ':attribute är inte en giltig URL.',
    'after'      => ':attribute måste vara ett datum efter :datum.',
    'alpha'      => ':attribute får endast innehålla bokstäver.',
    'alpha_dash' => ':attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'  => ':attribute får endast innehålla bokstäver och siffror.',
    'array'      => '.attribute måste vara en lista med värden.',
    'before'     => ':attribute måste vara ett datum före :date.',
    'between'    => [
        'numeric' => ':attribute måste vara mellan :min och :max.',
        'file'    => ':attribute måste vara mellan :min and :max kilobyte.',
        'string'  => ':attribute måste vara mellan :min och :max tecken.',
        'array'   => ':attribute måste ha mellan :min och :max föremål.',
    ],
    'boolean'        => ':attribute måste vara sant eller falskt.',
    'confirmed'      => ':attribute-bekräftelsen matchar inte.',
    'date'           => ':attribute är inte ett giltigt datum.',
    'date_format'    => ':attribute matchar inte med formatet :format.',
    'different'      => ':attribute och :other måste vara olika.',
    'digits'         => ':attribute måste vara :digits siffror.',
    'digits_between' => ':attribute måste vara mellan :min och :max siffror.',
    'email'          => ':attribute måste vara en giltig e-postadress.',
    'exists'         => 'Valdt :attribute är ogiltigt.',
    'filled'         => ':attribute-fältet är obligatoriskt.',
    'image'          => ':attribute måste vara en bild.',
    'in'             => 'Valdt :attribute är ogiltigt.',
    'integer'        => ':attribute måste vara ett heltal.',
    'ip'             => ':attribute måste vara en giltig IP-adress.',
    'json'           => ':attribute måste vara en giltig JSON-sträng.',
    'max'            => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file'    => ':attribute får inte vara större än :max kilobyte.',
        'string'  => ':attribute får inte vara större än :max tecken.',
        'array'   => ':attribute får inte innehålla mer än :max föremål.',
    ],
    'mimes' => ':attribute måste vara en filtyp i ett av följande format: :values.',
    'min'   => [
        'numeric' => ':attribute måste vara större än :min.',
        'file'    => ':attribute måste vara större än :min kilobyte.',
        'string'  => ':attribute måste vara längre än :min tecken.',
        'array'   => ':attribute måste innehålla minst :min föremål.',
    ],
    'not_in'               => 'Valdt :attribute är ogiltigt.',
    'numeric'              => ':attribute måste vara ett tal.',
    'regex'                => ':attribute-formatet är ogiltigt.',
    'required'             => ':attribute-fältet är obligatoriskt.',
    'required_if'          => ':attribute-fältet är obligatoriskt när :other är :value.',
    'required_unless'      => ':attribute-fältet är obligatoriskt om inte :other är :value.',
    'required_with'        => ':attribute fältet är obligatoriskt när :values är valda.',
    'required_with_all'    => ':attribute fältet är obligatoriskt när :values är valda.',
    'required_without'     => ':attribute-fältet är obligatoriskt när :values inte är valda.',
    'required_without_all' => ':attribute-fältet är obligatoriskt när inga :values är valda.',
    'same'                 => ':attribute och :other måste matcha.',
    'size'                 => [
        'numeric' => ':attribute måste vara :size.',
        'file'    => ':attribute måste vara :size kilobyte.',
        'string'  => ':attribute måste vara :size tecken.',
        'array'   => ':attribute måste ha :size föremål.',
    ],
    'string'   => ':attribute måste vara en sträng.',
    'timezone' => ':attribute måste vara en giltig zon.',
    'unique'   => ':attribute är upptaget.',
    'url'      => ':attribute-formatet är ogiltigt.',

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
            'rule-name' => 'valfritt-meddelande',
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
