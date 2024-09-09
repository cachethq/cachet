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
        'file'    => ':attribute musi być między :min i :max.',
        'string'  => ':attribute musi ważyć od :min do :max kilobajtów.',
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => ':attribute muss zwischen :min & :max Elemente haben.',
    'confirmed'      => 'Pole :attribute musi być prawdą albo fałszem.',
    'date'           => 'Potwierdzenie :attribute nie pasuje.',
    'date_format'    => ':attribute nie jest prawidłową datą.',
    'different'      => ':attribute nie pasuje do formatu :format.',
    'digits'         => ':attribute i :other muszą być różne.',
    'digits_between' => ':attribute musi zawierać cyfry :digits.',
    'email'          => ':attribute musi mieć od :min do :max cyfer.',
    'exists'         => ':attribute musi być prawidłowym adresem email.',
    'distinct'       => 'Pole :attribute zawiera podwójną wartość.',
    'filled'         => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'image'          => ':attribute muss ein Bild sein.',
    'in'             => ':attribute muss ein Bild sein.',
    'in_array'       => 'Pole :attribute nie istnieje w :other.',
    'integer'        => 'Wybrany :attribute jest nieprawidłowy.',
    'ip'             => ':attribute musi być liczbą całkowitą.',
    'json'           => ':attribute musi być prawidłowym węzłem JSON.',
    'max'            => [
        'numeric' => ':attribute musi być prawidłowym adresem IP.',
        'file'    => ':attribute nie może być większy niż :max.',
        'string'  => ':attribute nie może ważyć więcej niż :max kilobajtów.',
        'array'   => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute darf nicht mehr als :max Elemente haben.',
    'min'   => [
        'numeric' => ':attribute musi być typem pliku: :values.',
        'file'    => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string'  => ':attribute muss mindestens :min Kilobytes groß sein.',
        'array'   => ':attribute musi mieć przynajmniej :min znaków.',
    ],
    'not_in'               => ':attribute musi zawierać przynajmniej :min elementów.',
    'numeric'              => 'Wybrany :attribute jest nieprawidłowy.',
    'present'              => 'Pole :attribute musi być obecne.',
    'regex'                => ':attribute musi być liczbą.',
    'required'             => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'required_if'          => 'Pole :attribute jest wymagane.',
    'required_unless'      => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with'        => 'Pole :attribute jest wymagane, kiedy :other jest :value.',
    'required_with_all'    => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_without'     => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_without_all' => 'Pole :attribute jest wymagane, kiedy :values nie jest dostępny.',
    'same'                 => 'Pole :attribute jest wymagane, kiedy żaden :values nie jest obecny.',
    'size'                 => [
        'numeric' => ':attribute i :other muszą pasować.',
        'file'    => ':attribute muss :size Kilobytes groß sein.',
        'string'  => ':attribute muss :size Zeichen lang sein.',
        'array'   => ':attribute muss :size Zeichen lang sein.',
    ],
    'string'   => ':attribute musi zawierać :size elementów.',
    'timezone' => ':attribute muss eine gültige Zeitzone sein.',
    'unique'   => ':attribute ist schon vergeben.',
    'url'      => 'Format atrybutu ":attribute" jest nieprawidłowy.',

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
