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

    'accepted'   => ':attribute muss akzeptiert werden.',
    'active_url' => ':attribute ist keine gültige Internet-Adresse.',
    'after'      => ':attribute muss ein Datum nach dem :date sein.',
    'alpha'      => ':attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash' => ':attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen. Umlaute (ä, ö, ü) und Eszett (ß) sind nicht erlaubt.',
    'alpha_num'  => ':attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen. Umlaute (ä, ö, ü) und Eszett (ß) sind nicht erlaubt.',
    'array'      => ':attribute muss ein Array sein.',
    'before'     => ':attribute muss ein Datum vor dem :date sein.',
    'between'    => [
        'numeric' => ':attribute muss ein Datum vor dem :date sein.',
        'file'    => 'Das :attribute muss zwischen :min und :max liegen.',
        'string'  => 'Das :attribute muss zwischen :min und :max kilobytes groß sein.',
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => ':attribute muss zwischen :min & :max Elemente haben.',
    'confirmed'      => ':attribute Feld muss richtig oder falsch sein.',
    'date'           => ':attribute stimmt nicht mit der Bestätigung überein.',
    'date_format'    => ':attribute ist kein gültiges Datum.',
    'different'      => ':attribute entspricht nicht dem gültigen Format :format.',
    'digits'         => ':attribute und :other müssen sich unterscheiden.',
    'digits_between' => ':attribute muss :digits Stellen haben.',
    'email'          => ':attribute soll mindestens :min und darf maximal :max Stellen haben.',
    'exists'         => ':attribute muss eine gültige Emailadresse sein.',
    'distinct'       => ':attribute hat doppelte Werte.',
    'filled'         => 'Das Format von :attribute ist ungültig.',
    'image'          => ':attribute muss ein Bild sein.',
    'in'             => ':attribute muss ein Bild sein.',
    'in_array'       => ':attribute existiert nicht in :other.',
    'integer'        => 'Das ausgewählte :attribute ist ungültig.',
    'ip'             => ':attribute muss eine ganze Zahl sein.',
    'json'           => ':attribut muss ein gültiger JSON-String sein.',
    'max'            => [
        'numeric' => ':attribute muss eine gültige IP-Adresse sein.',
        'file'    => ':attribute darf nicht größer als :max sein.',
        'string'  => ':attribute darf nicht größer als :max kb sein.',
        'array'   => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute darf nicht mehr als :max Elemente haben.',
    'min'   => [
        'numeric' => ':attribute muss eine Datei des Typs :values sein.',
        'file'    => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string'  => ':attribute muss mindestens :min Kilobytes groß sein.',
        'array'   => ':attribute muss mindestens :min Zeichen lang sein.',
    ],
    'not_in'               => ':attribute muss mindestens :min Elemente haben.',
    'numeric'              => 'Das ausgewählte :attribute ist ungültig.',
    'present'              => ':attribute muss ausgefüllt sein.',
    'regex'                => ':attribute muss eine Zahl sein.',
    'required'             => 'Das Format von :attribute ist ungültig.',
    'required_if'          => ':attribute muss ausgefüllt sein.',
    'required_unless'      => 'Das :attribute Feld ist erforderlich außer :other hat den Wert :values.',
    'required_with'        => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without'     => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without_all' => ':attribute muss angegeben werden, wenn :values nicht ausgefüllt wurde.',
    'same'                 => ':attribute ist erforderlich, wenn keines von :values vorhanden ist.',
    'size'                 => [
        'numeric' => ':attribute und :other müssen übereinstimmen.',
        'file'    => ':attribute muss :size Kilobytes groß sein.',
        'string'  => ':attribute muss :size Zeichen lang sein.',
        'array'   => ':attribute muss :size Zeichen lang sein.',
    ],
    'string'   => ':attribute muss :size Elemente beinhalten.',
    'timezone' => ':attribute muss eine gültige Zeitzone sein.',
    'unique'   => ':attribute ist schon vergeben.',
    'url'      => 'Das Format von :attribute ist ungültig.',

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
            'rule-name' => 'Individuelle Nachricht',
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
