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

    'accepted'   => ':attribute deve essere accettato.',
    'active_url' => ':attribute non è un URL valido.',
    'after'      => ':attribute deve essere una data successiva al :date.',
    'alpha'      => 'Il campo :attribute può contenere solo lettere.',
    'alpha_dash' => 'Il campo :attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num'  => 'Il campo :attribute può contenere solo lettere e numeri.',
    'array'      => ':attribute deve essere un array.',
    'before'     => 'Il campo :attribute deve contenere una data precedente a :date.',
    'between'    => [
        'numeric' => 'Il campo :attribute deve essere compreso tra :min e :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'Il campo :attributo deve avere tra :min e :max elementi.',
    ],
    'boolean'        => 'Il campo :attribuite deve essere vero o falso.',
    'confirmed'      => 'Il campo :attribute non corrisponde.',
    'date'           => 'Il campo :attribute non contiene una data valida.',
    'date_format'    => 'Il campo :attribute non contiene una data con il formato :format.',
    'different'      => 'I campi :attribute e :other devono contenere valori diversi.',
    'digits'         => 'Il campo :attribute deve contenere :digits cifre.',
    'digits_between' => 'Il campo :attribute deve contenere dalle :min alle :max cifre.',
    'email'          => 'Il campo :attribute non contiene un indirizzo email valido.',
    'exists'         => 'Il valore del campo :attribute non è valido.',
    'filled'         => 'Il campo :attribute è obbligatorio.',
    'image'          => 'Il campo :attribute deve contenere un\'immagine.',
    'in'             => 'Il valore del campo :attribute non è valido.',
    'integer'        => 'Il campo :attribute deve contenere un numero intero.',
    'ip'             => 'Il campo :attribute deve contenere un indirizzo IP valido.',
    'json'           => 'The :attribute must be a valid JSON string.',
    'max'            => [
        'numeric' => 'Il campo :attribute non può contenere un numero maggiore di :max.',
        'file'    => 'Il campo :attribute non può essere superiore a :max kilobyte.',
        'string'  => 'Il campo :attribute non può contenere più di :max caratteri.',
        'array'   => 'Il campo :attribute non può avere più di :max elementi.',
    ],
    'mimes' => 'Il campo :attribute deve contenere un file del tipo: :values.',
    'min'   => [
        'numeric' => 'Il campo :attribute non può contenere un numero inferiore a :min.',
        'file'    => 'Il campo :attribute deve essere minimo :min kilobyte.',
        'string'  => 'Il campo :attribute deve contenere almeno :min caratteri.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'Il valore del campo :attribute non è valido.',
    'numeric'              => 'Il campo :attribute deve essere un numero.',
    'regex'                => 'Il formato di :attribute non è valido.',
    'required'             => 'Il campo :attribute è obbligatorio.',
    'required_if'          => 'Il campo :attribute è richiesto quando :other vale :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all'    => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without'     => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno dei valori :values è presente.',
    'same'                 => 'I campi :attribute e :other devono corrispondere.',
    'size'                 => [
        'numeric' => 'Il campo :attribute deve essere :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'Il campo :attribute deve essere una stringa.',
    'timezone' => ':attribute deve essere una zona valida.',
    'unique'   => 'Il valore del campo :attribute è già stato preso.',
    'url'      => 'Il formato di :attribute non è valido.',

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
            'rule-name' => 'messaggio personalizzato',
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
