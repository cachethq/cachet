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
        'file'    => ':attribute musi mieć wartość pomiędzy :min a :max.',
        'string'  => ' :attribute musi mieć rozmiar pomiędzy :min a :max kilobajtów.',
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => ':attribute muss zwischen :min & :max Elemente haben.',
    'confirmed'      => ':attribute musi być prawdą lub fałszem.',
    'date'           => ':attribute potwierdzenie nie zgadza się.',
    'date_format'    => ':attribute nie jest prawidłową datą.',
    'different'      => ':attribute nie pasuje do formatu :format.',
    'digits'         => ':attribute musi być różne od :other.',
    'digits_between' => ':attribute musi składać się z :digits cyfr.',
    'email'          => ':attribute musi być w zakresie od :min do :max liczb.',
    'exists'         => ':attribute musi zawierać prawidłowy adres e-mail.',
    'distinct'       => 'Pole :attribute zawiera podwójną wartość.',
    'filled'         => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'image'          => ':attribute muss ein Bild sein.',
    'in'             => ':attribute muss ein Bild sein.',
    'in_array'       => 'Pole :attribute nie istnieje w :other.',
    'integer'        => 'Wybrany :attribute jest nieprawidłowy.',
    'ip'             => ':attribute musi być liczbą całkowitą.',
    'json'           => ':attribute musi być prawidłowym węzłem JSON.',
    'max'            => [
        'numeric' => ':attribute musi zawierać prawidłowy adres IP.',
        'file'    => ':attribute nie może być większy niż :max.',
        'string'  => ':attribute nie może być większy niż :max kilobajtów.',
        'array'   => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute darf nicht mehr als :max Elemente haben.',
    'min'   => [
        'numeric' => ':attribute musi być plikiem typu: :values.',
        'file'    => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string'  => ':attribute muss mindestens :min Kilobytes groß sein.',
        'array'   => ':attribute musi składać się co najmniej z :min znaków.',
    ],
    'not_in'               => ':attribute musi składać się z co najmniej :min elementów.',
    'numeric'              => 'Wybrany :attribute jest nieprawidłowy.',
    'present'              => 'Pole :attribute musi być obecne.',
    'regex'                => ':attribute musi być liczbą.',
    'required'             => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'required_if'          => 'Pole :attribute jest wymagane.',
    'required_unless'      => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with'        => 'Pole :attribute jest wymagane, gdy :other jest ustawione na :value.',
    'required_with_all'    => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_without'     => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_without_all' => 'Pole :attribute jest wymagane, gdy :values nie jest podane.',
    'same'                 => ':attribute jest wymagane, gdy żadna z wartości :values nie jest podana.',
    'size'                 => [
        'numeric' => 'Pola :attribute i :other muszą być takie same.',
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
