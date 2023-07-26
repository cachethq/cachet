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
    'alpha'      => ':attribute può contenere solo lettere.',
    'alpha_dash' => ':attribute può contenere solo lettere, numeri e trattini.',
    'alpha_num'  => ':attribute può contenere solo lettere e numeri.',
    'array'      => ':attribute deve essere un array.',
    'before'     => ':attribute deve contenere una data precedente al :date.',
    'between'    => [
        'numeric' => ':attribute deve contenere una data precedente al :date.',
        'file'    => 'Il campo :attribute deve essere compreso tra :min e :max.',
        'string'  => 'Il campo :attribute deve essere compreso tra :min e :max kilobytes.',
        'array'   => ':attributo deve avere tra :min e :max elementi.',
    ],
    'boolean'        => ':attributo deve avere tra :min e :max elementi.',
    'confirmed'      => 'Il campo :attribute deve essere vero o falso.',
    'date'           => 'Il campo :attribute non coincide.',
    'date_format'    => 'Il campo :attribute non contiene una data valida.',
    'different'      => 'Il campo :attribute non corrisponde al formato :format.',
    'digits'         => 'I campi :attribute e :other devono contenere valori diversi.',
    'digits_between' => 'Il campo :attribute deve contenere :digits cifre.',
    'email'          => 'Il campo :attribute deve contenere dalle :min alle :max cifre.',
    'exists'         => 'Il campo :attribute deve essere un indirizzo email valido.',
    'distinct'       => 'Il campo :attribute ha un valore duplicato.',
    'filled'         => 'Il formato di :attribute non è valido.',
    'image'          => ':attribute deve contenere un\'immagine.',
    'in'             => ':attribute deve contenere un\'immagine.',
    'in_array'       => 'Il campo :attribute non esiste in :other.',
    'integer'        => ':attribute selezionato non è valido.',
    'ip'             => ':attribute deve essere un numero intero.',
    'json'           => ':attribute deve essere una stringa JSON valida.',
    'max'            => [
        'numeric' => ':attribute deve essere un indirizzo IP valido.',
        'file'    => ':attribute non può essere superiore a :max.',
        'string'  => ':attribute non può essere maggiore di :max kilobytes.',
        'array'   => ':attribute non può avere più di :max elementi.',
    ],
    'mimes' => ':attribute non può avere più di :max elementi.',
    'min'   => [
        'numeric' => ':attribute deve essere un file di tipo :values.',
        'file'    => ':attribute deve essere almeno :min kilobyte.',
        'string'  => ':attribute deve essere almeno :min kilobyte.',
        'array'   => ':attribute deve essere di almeno :min caratteri.',
    ],
    'not_in'               => ':attribute deve avere almeno :min elementi.',
    'numeric'              => ':attribute selezionato non è valido.',
    'present'              => 'Il campo :attribute deve essere presente.',
    'regex'                => ':attribute deve essere un numero.',
    'required'             => 'Il formato di :attribute non è valido.',
    'required_if'          => 'Il campo :attribute è obbligatorio.',
    'required_unless'      => 'Il campo :attribute è obbligatorio a meno che :other è presente in :values.',
    'required_with'        => 'Il campo :attribute è obbligatorio quando :other è :values.',
    'required_with_all'    => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without'     => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'same'                 => 'Il campo :attribute è obbligatorio quando nessuno dei :values è presente.',
    'size'                 => [
        'numeric' => ':attribute e :other devono coincidere.',
        'file'    => ':attribute deve essere di :size kilobytes.',
        'string'  => ':attribute deve essere di :size caratteri.',
        'array'   => ':attribute deve essere di :size caratteri.',
    ],
    'string'   => ':attribute deve contenere :size elementi.',
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
