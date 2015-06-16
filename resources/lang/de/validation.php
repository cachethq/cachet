<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
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

    'accepted'   => '<em>:attribute</em> muss akzeptiert werden.',
    'active_url' => '<em>:attribute</em> ist keine valide URL.',
    'after'      => '<em>:attribute</em> muss nach :date liegen.',
    'alpha'      => '<em>:attribute</em> darf nur Buchstaben enthalten.',
    'alpha_dash' => '<em>:attribute</em> darf nur Nummern, Buchstaben und Slashes enthalten.',
    'alpha_num'  => '<em>:attribute</em> darf nur Nummern und Buchstaben enthalten.',
    'array'      => '<em>:attribute</em> muss ein Array sein.',
    'before'     => '<em>:attribute</em> muss vor :date liegen.',
    'between'    => [
        'numeric' => '<em>:attribute</em> muss zwichen :min und :max liegen.',
        'file'    => '<em>:attribute</em> muss zwischen :min und :max kilobyte liegen.',
        'string'  => '<em>:attribute</em> muss zwischen :min und :max Zeichen lang sein.',
        'array'   => '<em>:attribute</em> muss zwischen :min und :max Werte enthalten.',
    ],
    'boolean'        => "<em>:attribute</em> Feld muss 'true' oder 'false' sein.",
    'confirmed'      => 'Die Bestätigung/Wiederholung von <em>:attribute</em> stimmt nicht überein.',
    'date'           => '<em>:attribute</em> ist kein valides Datum.',
    'date_format'    => '<em>:attribute</em> passt nicht zu folgendem Format :format.',
    'different'      => '<em>:attribute</em> und :other müssen sich unterscheiden.',
    'digits'         => '<em>:attribute</em> muss :digits Zeichen lang sein.',
    'digits_between' => '<em>:attribute</em> muss zwischen :min und :max Zeichen lang sein.',
    'email'          => '<em>:attribute</em> muss eine valide E-Mail-Adresse sein.',
    'exists'         => 'Das gewählte <em>:attribute</em> ist nicht korrekt.',
    'image'          => '<em>:attribute</em> muss ein Bild sein.',
    'in'             => 'Das ausgewählte <em>:attribute</em> ist nicht korrekt.',
    'integer'        => '<em>:attribute</em> muss eine Zahl sein.',
    'ip'             => '<em>:attribute</em> muss eine valide IP sein.', # IPv4?
    'max'            => [
        'numeric' => '<em>:attribute</em> darf nicht größer als :max sein.',
        'file'    => '<em>:attribute</em> darf nicht größer als :max kilobyte sein.',
        'string'  => '<em>:attribute</em> darf nicht mehr als :max Zeichen lang sein.',
        'array'   => '<em>:attribute</em> darf nicht mehr als :max Werte enthalten.',
    ],
    'mimes' => '<em>:attribute</em> muss eine Datei vom Typ :values sein.',
    'min'   => [
        'numeric' => '<em>:attribute</em> muss mindestens :min sein.',
        'file'    => '<em>:attribute</em> muss mindestens :min kilobyte groß sein.',
        'string'  => '<em>:attribute</em> muss mindestens :min Zeichen lang sein.',
        'array'   => '<em>:attribute</em> muss mindestens :min Werte enthalten.',
    ],
    'not_in'               => 'Das ausgewählte <em>:attribute</em> ist nicht korrekt.',
    'numeric'              => '<em>:attribute</em> muss eine Nummer sein.',
    'regex'                => 'Das Format von <em>:attribute</em> ist nicht korrekt.',
    'required'             => '<em>:attribute</em> wird benötigt.',
    'required_if'          => '<em>:attribute</em> wird benötigt wenn :other den Wert :value hat.',
    'required_with'        => '<em>:attribute</em> ist erforderlich wenn :values vorhanden ist.',
    'required_with_all'    => '<em>:attribute</em> ist erforderlich wenn :values vorhanden ist.',
    'required_without'     => '<em>:attribute</em> ist erforderlich wenn :values nicht vorhanden ist.',
    'required_without_all' => '<em>:attribute</em> ist erforderlich wenn keines der Werte :values vorhanden sind.',
    'same'                 => '<em>:attribute</em> und :other müssen übereinstimmen.',
    'size'                 => [
        'numeric' => '<em>:attribute</em> muss :size sein.',
        'file'    => '<em>:attribute</em> muss :size kilobyte groß sein.',
        'string'  => '<em>:attribute</em> muss :size Zeichen lang sein.',
        'array'   => '<em>:attribute</em> muss :size Werte enthalten.',
    ],
    'string'   => 'The :attribute must be a string.',
    'unique'   => '<em>:attribute</em> wurde beirets gewählt.',
    'url'      => 'Das Format von <em>:attribute</em> ist nicht korrekt.',
    'timezone' => '<em>:attribute</em> muss eine valide Zeitzone sein.',

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
