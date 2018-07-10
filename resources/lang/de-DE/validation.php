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
        'file'    => ':attribute muss zwischen :min und :max liegen.',
        'string'  => ':attribute muss zwischen :min und :max Kilobytes groß sein.',
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => ':attribute muss zwischen :min & :max Elemente haben.',
    'confirmed'      => ':attribute Feld muss true oder false sein.',
    'date'           => ':attribute Bestätigung stimmt nicht überein.',
    'date_format'    => ':attribute ist kein gültiges Datum.',
    'different'      => ':attribute entspricht nicht dem Format :format.',
    'digits'         => ':attribute und :other dürfen nicht identisch sein.',
    'digits_between' => ':attribute muss :digits Zeichen lang sein.',
    'email'          => ':attribute muss zwischen :min und :max Zeichen lang sein.',
    'exists'         => ':attribute muss eine gültige E-Mail-Ad­res­se sein.',
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
        'file'    => ':attribute darf nicht größer sein als :max.',
        'string'  => ':attribute darf nicht größer sein als :max kilobytes.',
        'array'   => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute darf nicht mehr als :max Elemente haben.',
    'min'   => [
        'numeric' => ':attribute muss einem der Dateitypen: :values entsprechen.',
        'file'    => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string'  => ':attribute muss mindestens :min Kilobytes groß sein.',
        'array'   => ':attribute muss mindestens :min Zeichen enthalten.',
    ],
    'not_in'               => ':attribute muss mindestens :min Elemente haben.',
    'numeric'              => 'Das ausgewählte :attribute ist ungültig.',
    'present'              => ':attribute muss ausgefüllt sein.',
    'regex'                => ':attribute muss eine Zahl sein.',
    'required'             => 'Das Format von :attribute ist ungültig.',
    'required_if'          => 'Das Feld :attribute ist erforderlich.',
    'required_unless'      => 'Das :attribute Feld ist erforderlich außer :other hat den Wert :values.',
    'required_with'        => ':attribute wird benötigt wenn :other :value entspricht.',
    'required_with_all'    => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without'     => ':attribute muss angegeben werden, wenn :values ausgefüllt wurde.',
    'required_without_all' => ':attribute muss angegeben werden, wenn :values nicht angegeben wurde.',
    'same'                 => ':attribute ist erforderlich, wenn keiner von :values vorhanden sind.',
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
