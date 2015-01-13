<?php

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

    "accepted"             => ":attribute muss akzeptiert werden.",
    "active_url"           => ":attribute ist keine valide URL.",
    "after"                => ":attribute muss nach :date liegen.",
    "alpha"                => ":attribute darf nur Buchstaben enthalten.",
    "alpha_dash"           => ":attribute darf nur Nummern, Buchstaben und Slashes enthalten.",
    "alpha_num"            => ":attribute darf nur Nummern und Buchstaben enthalten.",
    "array"                => ":attribute muss ein Array sein.",
    "before"               => ":attribute muss vor :date liegen.",
    "between"              => [
        "numeric" => ":attribute muss zwichen :min und :max liegen.",
        "file"    => ":attribute muss zwischen :min und :max kilobyte liegen.",
        "string"  => ":attribute muss zwischen :min und :max Zeichen lang sein.",
        "array"   => ":attribute muss zwischen :min und :max Werte enthalten.",
    ],
    "boolean"              => ":attribute Feld muss 'true' oder 'false' sein.",
    "confirmed"            => "Die Bestätigung/Wiederholung von :attribute stimmt nicht überein.",
    "date"                 => ":attribute ist kein valides Datum.",
    "date_format"          => ":attribute passt nicht zu folgendem Format :format.",
    "different"            => ":attribute und :other müssen sich unterscheiden.",
    "digits"               => ":attribute muss :digits Zeichen lang sein.",
    "digits_between"       => ":attribute muss zwischen :min und :max Zeichen lang sein.",
    "email"                => ":attribute muss eine valide E-Mail-Adresse sein.",
    "exists"               => "Das gewählte :attribute ist nicht korrekt.",
    "image"                => ":attribute muss ein Bild sein.",
    "in"                   => "Das ausgewählte :attribute ist nicht korrekt.",
    "integer"              => ":attribute muss eine Zahl sein.",
    "ip"                   => ":attribute muss eine valide IP sein.", # IPv4?
    "max"                  => [
        "numeric" => ":attribute darf nicht größer als :max sein.",
        "file"    => ":attribute darf nicht größer als :max kilobyte sein.",
        "string"  => ":attribute darf nicht mehr als :max Zeichen lang sein.",
        "array"   => ":attribute darf nicht mehr als :max Werte enthalten.",
    ],
    "mimes"                => ":attribute muss eine Datei vom Typ :values sein.",
    "min"                  => [
        "numeric" => ":attribute muss mindestens :min sein.",
        "file"    => ":attribute muss mindestens :min kilobyte groß sein.",
        "string"  => ":attribute muss mindestens :min Zeichen lang sein.",
        "array"   => ":attribute muss mindestens :min Werte enthalten.",
    ],
    "not_in"               => "Das ausgewählte :attribute ist nicht korrekt.",
    "numeric"              => ":attribute muss eine Nummer sein.",
    "regex"                => "Das Format von :attribute ist nicht korrekt.",
    "required"             => ":attribute wird benötigt.",
    "required_if"          => ":attribute wird benötigt wenn :other den Wert :value hat.",
    "required_with"        => ":attribute ist erforderlich wenn :values vorhanden ist.",
    "required_with_all"    => ":attribute ist erforderlich wenn :values vorhanden ist.",
    "required_without"     => ":attribute ist erforderlich wenn :values nicht vorhanden ist.",
    "required_without_all" => ":attribute ist erforderlich wenn keines der Werte :values vorhanden sind.",
    "same"                 => ":attribute und :other müssen übereinstimmen.",
    "size"                 => [
        "numeric" => ":attribute muss :size sein.",
        "file"    => ":attribute muss :size kilobyte groß sein.",
        "string"  => ":attribute muss :size Zeichen lang sein.",
        "array"   => ":attribute muss :size Werte enthalten.",
    ],
    "unique"               => ":attribute wurde beirets gewählt.",
    "url"                  => "Das Format von :attribute ist nicht korrekt.",
    "timezone"             => ":attribute muss eine valide Zeitzone sein.",

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
