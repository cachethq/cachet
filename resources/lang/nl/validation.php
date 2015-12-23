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

    'accepted'   => ':attribute moet worden aanvaard.',
    'active_url' => ':attribute is geen correcte URL.',
    'after'      => ':attribute moet een datum later dan :date zijn.',
    'alpha'      => ':attribute mag alleen letters bevatten.',
    'alpha_dash' => ':attribute mag alleen letters, cijfers, en streepjes bevatten.',
    'alpha_num'  => ':attribute mag enkel letters en nummers bevatten.',
    'array'      => ':attribute moet een reeks zijn.',
    'before'     => ':attribute moet een datum vóór :date zijn.',
    'between'    => [
        'numeric' => ':attribute moet tussen :min en :max liggen.',
        'file'    => ':attribute moet tussen :min en :max kilobytes groot zijn.',
        'string'  => ':attribute moet tussen :min en :max karakters lang zijn.',
        'array'   => ':attribute moet tussen :min en :max items hebben.',
    ],
    'boolean'        => 'Het :attribute-veld moet true of false zijn.',
    'confirmed'      => ':attribute bevestiging komt niet overeen.',
    'date'           => ':attribute is geen geldige datum.',
    'date_format'    => ':attribute komt niet overeen met het formaat :format.',
    'different'      => ':attribute en :other moeten verschillend zijn.',
    'digits'         => ':attribute moet :digits cijfers lang zijn.',
    'digits_between' => ':attribute moet tussen :min en :max cijfers hebben.',
    'email'          => ':attribute moet een geldig e-mailadres zijn.',
    'exists'         => 'Het geselecteerde :attribute is ongeldig.',
    'image'          => ':attribute moet een afbeelding zijn.',
    'in'             => 'Het geselecteerde :attribute is ongeldig.',
    'integer'        => 'The :attribute moet een geheel getal zijn.',
    'ip'             => ':attribute moet een geldig IP-adres zijn.',
    'max'            => [
        'numeric' => ':attribute mag niet groter dan :max zijn.',
        'file'    => ':attribute mag niet groter dan :max kilobytes zijn.',
        'string'  => ':attribute mag niet groter dan :max karakters zijn.',
        'array'   => ':attribute mag niet meer dan :max items hebben.',
    ],
    'mimes' => ':attribute moet een bestand zijn van het type: :values.',
    'min'   => [
        'numeric' => ':attribute moet minstens :min lang zijn.',
        'file'    => ':attribute moet minstens :min kilobytes groot zijn.',
        'string'  => ':attribute moet tenminste :min karakters bevatten.',
        'array'   => ':attribute moet minstens :min items bevatten.',
    ],
    'not_in'               => 'Het geselecteerde :attribute is ongeldig.',
    'numeric'              => ':attribute moet een getal zijn.',
    'regex'                => ':attribute formaat is ongeldig.',
    'required'             => ':attribute formaat is verplicht.',
    'required_if'          => ':attribute veld is verplicht wanneer :other gelijk is aan :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all'    => ':attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without'     => ':attribute veld is verplicht wanner :values niet aanwezig is.',
    'required_without_all' => ':attribute field is verplicht als geen enkele van de :values aanwezig zijn.',
    'same'                 => ':attribute en :other moeten overeen komen.',
    'size'                 => [
        'numeric' => ':attribute moet :size zijn.',
        'file'    => ':attribute moet :size kilobytes groot zijn.',
        'string'  => ':attribute moet :size karakters zijn.',
        'array'   => ':attribute moet :size items bevatten.',
    ],
    'string'   => ':attribute een text waarde zijn.',
    'unique'   => ':attribute is reeds in gebruik.',
    'url'      => 'Het :attribute-formaat is ongeldig.',
    'timezone' => ':attribute moet een geldige zone zijn.',

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
