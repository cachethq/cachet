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
        'numeric' => ':attribute moet een datum vóór :date zijn.',
        'file'    => ':attribute moet tussen :min en de :max zijn.',
        'string'  => ':attribute moet tussen de :min en de :max aantal kilobytes zijn.',
        'array'   => ':attribute moet tussen :min en :max items hebben.',
    ],
    'boolean'        => ':attribute moet tussen :min en :max items hebben.',
    'confirmed'      => 'Het :attribute veld moet waar of onwaar zijn.',
    'date'           => 'De :attribute bevestiging komt niet overeen.',
    'date_format'    => ':attribute is geen geldige datum.',
    'different'      => ':attribute komt niet overeen met het volgende formaat :format.',
    'digits'         => ':attribute en :other mogen niet hetzelfde zijn.',
    'digits_between' => ':attribute moet uit :digits cijfers bestaan.',
    'email'          => ':attribute moet tussen de :min en :max cijfers zijn.',
    'exists'         => ':attribute moet een geldig e-mail adres zijn.',
    'distinct'       => 'Het :attribute veld heeft een dubbele waarde.',
    'filled'         => 'Het :attribute-formaat is ongeldig.',
    'image'          => ':attribute moet een afbeelding zijn.',
    'in'             => ':attribute moet een afbeelding zijn.',
    'in_array'       => 'Het :attribute veld bestaat niet in :other.',
    'integer'        => 'Het geselecteerde :attribute is ongeldig.',
    'ip'             => ':attribute moet een geheel getal zijn.',
    'json'           => ':attribute moet een valide JSON tekst zijn.',
    'max'            => [
        'numeric' => 'Het :attribute moet een geldig IP-adres zijn.',
        'file'    => ':attribute mag niet groter zijn dan :max.',
        'string'  => ':attribute mag niet groter zijn dan :max kilobytes.',
        'array'   => ':attribute mag niet meer dan :max items hebben.',
    ],
    'mimes' => ':attribute mag niet meer dan :max items hebben.',
    'min'   => [
        'numeric' => ':attribute moet een :values bestand zijn.',
        'file'    => ':attribute moet minstens :min kilobytes groot zijn.',
        'string'  => ':attribute moet minstens :min kilobytes groot zijn.',
        'array'   => ':attribute moet minimaal :min tekens zijn.',
    ],
    'not_in'               => ':attribute moet tenminste :min onderdelen hebben.',
    'numeric'              => 'Het geselecteerde :attribute is ongeldig.',
    'present'              => 'Het :attribute veld moet aanwezig zijn.',
    'regex'                => ':attribute moet een getal zijn.',
    'required'             => 'Het :attribute-formaat is ongeldig.',
    'required_if'          => 'Het :attribute veld is verplicht.',
    'required_unless'      => 'Het :attribute veld is verplicht tenzij :other is in :values.',
    'required_with'        => 'Het :attribute veld is verplicht als :other :value is.',
    'required_with_all'    => ':attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without'     => ':attribute veld is verplicht wanneer :values aanwezig zijn.',
    'required_without_all' => 'Het :attribute veld is verplicht als er geen :values zijn.',
    'same'                 => 'Het :attribute veld is verplicht als geen van :values aanwezig zijn.',
    'size'                 => [
        'numeric' => ':attribute en :other moeten overeenkomen.',
        'file'    => ':attribute moet :size kilobytes groot zijn.',
        'string'  => ':attribute moet :size karakters zijn.',
        'array'   => ':attribute moet :size karakters zijn.',
    ],
    'string'   => ':attribute moet :size onderdelen bevatten.',
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
