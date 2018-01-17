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
        'numeric' => ':attribute musi mieć wartość pomiędzy :min a :max.',
        'file'    => ' :attribute musi mieć rozmiar pomiędzy :min a :max kilobajtów.',
        'string'  => ':attribute musi mieć pomiędzy :min a :max znaków.',
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => ':attribute musi być prawdą lub fałszem.',
    'confirmed'      => ':attribute potwierdzenie nie zgadza się.',
    'date'           => ':attribute nie jest prawidłową datą.',
    'date_format'    => ':attribute nie pasuje do formatu :format.',
    'different'      => ':attribute musi być różne od :other.',
    'digits'         => ':attribute musi składać się z :digits cyfr.',
    'digits_between' => ':attribute musi być w zakresie od :min do :max liczb.',
    'email'          => ':attribute musi zawierać prawidłowy adres e-mail.',
    'exists'         => 'Wybrany :attribute jest nieprawidłowy.',
    'distinct'       => 'Pole :attribute zawiera podwójną wartość.',
    'filled'         => 'Pole :attribute jest wymagane.',
    'image'          => ':attribute muss ein Bild sein.',
    'in'             => 'Wybrany :attribute jest nieprawidłowy.',
    'in_array'       => 'Pole :attribute nie istnieje w :other.',
    'integer'        => ':attribute musi być liczbą całkowitą.',
    'ip'             => ':attribute musi zawierać prawidłowy adres IP.',
    'json'           => ':attribute musi być prawidłowym węzłem JSON.',
    'max'            => [
        'numeric' => ':attribute nie może być większy niż :max.',
        'file'    => ':attribute nie może być większy niż :max kilobajtów.',
        'string'  => ':attribute nie może być dłuższy niż :max znaków.',
        'array'   => ':attribute darf nicht mehr als :max Elemente haben.',
    ],
    'mimes' => ':attribute musi być plikiem typu: :values.',
    'min'   => [
        'numeric' => ':attribute musi wynosić co najmniej :min.',
        'file'    => ':attribute muss mindestens :min Kilobytes groß sein.',
        'string'  => ':attribute musi składać się co najmniej z :min znaków.',
        'array'   => ':attribute musi składać się z co najmniej :min elementów.',
    ],
    'not_in'               => 'Wybrany :attribute jest nieprawidłowy.',
    'numeric'              => ':attribute musi być liczbą.',
    'present'              => 'Pole :attribute musi być obecne.',
    'regex'                => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'required'             => 'Pole :attribute jest wymagane.',
    'required_if'          => 'Pole :attribute jest wymagane, gdy :other jest ustawione na :value.',
    'required_unless'      => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with'        => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_with_all'    => 'Pole :attribute jest wymagane kiedy obecne jest :values.',
    'required_without'     => 'Pole :attribute jest wymagane, gdy :values nie jest podane.',
    'required_without_all' => ':attribute jest wymagane, gdy żadna z wartości :values nie jest podana.',
    'same'                 => 'Pola :attribute i :other muszą być takie same.',
    'size'                 => [
        'numeric' => ':attribute musi mieć rozmiar :size.',
        'file'    => ':attribute muss :size Kilobytes groß sein.',
        'string'  => ':attribute muss :size Zeichen lang sein.',
        'array'   => ':attribute musi zawierać :size elementów.',
    ],
    'string'   => ':attribute musi być ciągiem znaków.',
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
