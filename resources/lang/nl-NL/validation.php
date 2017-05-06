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
        'numeric' => ':attribute moet tussen :min en de :max zijn.',
        'file'    => ':attribute moet tussen de :min en de :max aantal kilobytes zijn.',
        'string'  => ':attribute moet tussen de :min en :max karakters lang zijn.',
        'array'   => ':attribute moet tussen :min en :max items hebben.',
    ],
    'boolean'        => 'Het :attribute veld moet waar of onwaar zijn.',
    'confirmed'      => 'De :attribute bevestiging komt niet overeen.',
    'date'           => ':attribute is geen geldige datum.',
    'date_format'    => ':attribute komt niet overeen met het volgende formaat :format.',
    'different'      => ':attribute en :other mogen niet hetzelfde zijn.',
    'digits'         => ':attribute moet uit :digits cijfers bestaan.',
    'digits_between' => ':attribute moet tussen de :min en :max cijfers zijn.',
    'email'          => ':attribute moet een geldig e-mail adres zijn.',
    'exists'         => 'Het geselecteerde :attribute is ongeldig.',
    'distinct'       => 'Het :attribute veld heeft een dubbele waarde.',
    'filled'         => 'Het :attribute veld is verplicht.',
    'image'          => ':attribute moet een afbeelding zijn.',
    'in'             => 'Het geselecteerde :attribute is ongeldig.',
    'in_array'       => 'Het :attribute veld bestaat niet in :other.',
    'integer'        => ':attribute moet een geheel getal zijn.',
    'ip'             => 'Het :attribute moet een geldig IP-adres zijn.',
    'json'           => ':attribute moet een valide JSON tekst zijn.',
    'max'            => [
        'numeric' => ':attribute mag niet groter zijn dan :max.',
        'file'    => ':attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => ':attribute mag niet groter zijn dan :max tekens.',
        'array'   => ':attribute mag niet meer dan :max items hebben.',
    ],
    'mimes' => ':attribute moet een :values bestand zijn.',
    'min'   => [
        'numeric' => ':attribute moet tenminste :min zijn.',
        'file'    => ':attribute moet minstens :min kilobytes groot zijn.',
        'string'  => ':attribute moet minimaal :min tekens zijn.',
        'array'   => ':attribute moet tenminste :min onderdelen hebben.',
    ],
    'not_in'               => 'Het geselecteerde :attribute is ongeldig.',
    'numeric'              => ':attribute moet een getal zijn.',
    'present'              => 'Het :attribute veld moet aanwezig zijn.',
    'regex'                => 'Het :attribute-formaat is ongeldig.',
    'required'             => 'Het :attribute veld is verplicht.',
    'required_if'          => 'Het :attribute veld is verplicht als :other :value is.',
    'required_unless'      => 'Het :attribute veld is verplicht tenzij :other is in :values.',
    'required_with'        => ':attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_with_all'    => ':attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without'     => 'Het :attribute veld is verplicht als er geen :values zijn.',
    'required_without_all' => 'Het :attribute veld is verplicht als geen van :values aanwezig zijn.',
    'same'                 => ':attribute en :other moeten overeenkomen.',
    'size'                 => [
        'numeric' => ':attribute moet :size zijn.',
        'file'    => ':attribute moet :size kilobytes groot zijn.',
        'string'  => ':attribute moet :size karakters zijn.',
        'array'   => ':attribute moet :size onderdelen bevatten.',
    ],
    'string'   => ':attribute moet een woord zijn.',
    'timezone' => ':attribute moet een geldige zone zijn.',
    'unique'   => ':attribute is reeds in gebruik.',
    'url'      => 'Het :attribute-formaat is ongeldig.',

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