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

    'accepted'   => ':attribute musi zostać zaakceptowany.',
    'active_url' => ':attribute nie jest poprawnym adresem URL.',
    'after'      => ':attribute musi być datą po :date.',
    'alpha'      => ':attribute może zawierać tylko litery.',
    'alpha_dash' => ':attribute może zawierać tylko litery, cyfry i myślniki.',
    'alpha_num'  => ':attribute może zawierać tylko litery i cyfry.',
    'array'      => ':attribute musi być tablicą.',
    'before'     => ':attribute musi być przed datą :date.',
    'between'    => [
        'numeric' => ':attribute muss ein Datum vor dem :date sein.',
        'file'    => ':attribute musi być między :min i :max.',
        'string'  => ':attribute musi ważyć od :min do :max kilobajtów.',
        'array'   => ':attribute muss zwischen :min & :max Elemente haben.',
    ],
    'boolean'        => ':attribute musi być pomiędzy :min a :max.',
    'confirmed'      => 'Pole :attribute musi być prawdą albo fałszem.',
    'date'           => 'Potwierdzenie :attribute nie pasuje.',
    'date_format'    => ':attribute nie jest prawidłową datą.',
    'different'      => ':attribute nie pasuje do formatu :format.',
    'digits'         => ':attribute i :other muszą być różne.',
    'digits_between' => ':attribute musi zawierać cyfry :digits.',
    'email'          => ':attribute musi mieć od :min do :max cyfr.',
    'exists'         => ':attribute musi być prawidłowym adresem email.',
    'distinct'       => 'Pole :attribute zawiera podwójną wartość.',
    'filled'         => 'Format atrybutu ":attribute" jest nieprawidłowy.',
    'image'          => 'Pole :attribute musi zawierać obraz.',
    'in'             => 'Wybrane pole :attribute jest nieprawidłowe.',
    'in_array'       => 'Pole :attribute nie istnieje w :other.',
    'integer'        => 'Wybrany :attribute jest nieprawidłowy.',
    'ip'             => ':attribute musi być prawidłowym adresem IP.',
    'json'           => ':attribute musi być prawidłowym węzłem JSON.',
    'max'            => [
        'numeric' => ':attribute nie może być większy od :max.',
        'file'    => ':attribute nie może ważyć więcej niż :max kilobajtów.',
        'string'  => ':attribute nie może być większy niż :max.',
        'array'   => ':attribute nie może mieć więcej elementów niż :max.',
    ],
    'mimes' => ':attribute musi zawierać plik z rozszerzeniem: :max.',
    'min'   => [
        'numeric' => ':attribute musi być większy od :max.',
        'file'    => ':attribute musi ważyć więcej niż :max kilobajtów.',
        'string'  => ':attribute musi być większy od :max.',
        'array'   => ':attribute musi mieć więcej elementów od :max.',
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
        'file'    => ':attribute musi ważyć :size kilobajtów.',
        'string'  => ':attribute musi mieć :size znaków.',
        'array'   => ':attribute musi mieć :size elementów.',
    ],
    'string'   => ':attribute musi zawierać :size elementów.',
    'timezone' => ':attribute musi zawierać prawidłową strefę czasową.',
    'unique'   => ':attribute jest już zajęty.',
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
            'rule-name' => 'Indywidualna wiadomość',
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
