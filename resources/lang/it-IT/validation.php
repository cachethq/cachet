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
        'numeric' => 'Il campo :attribute deve essere tra :min e :max.',
        'file'    => ':attribute deve essere compreso tra :min e :max kilobyte.',
        'string'  => ':attribute deve essere tra :min e :max caratteri.',
        'array'   => ':attributo deve avere tra :min e :max elementi.',
    ],
    'boolean'        => 'Il campo :attribute deve essere vero o falso.',
    'confirmed'      => 'Il campo :attribute non combacia.',
    'date'           => 'Il campo :attribute non è una data valida.',
    'date_format'    => 'Il campo :attribute non corrisponde al formato :format.',
    'different'      => 'I campi :attribute e :other devono essere diversi.',
    'digits'         => 'Il campo :attribute deve contenere :digits cifre.',
    'digits_between' => 'Attributo :attribute deve essere compreso tra :min e :max caratteri.',
    'email'          => 'Il campo :attribute deve essere un indirizzo email valido.',
    'exists'         => 'L\'attributo selezionato :attribute non è valido.',
    'distinct'       => 'Il campo :attribute ha un valore duplicato.',
    'filled'         => 'Il campo :attribute è richiesto.',
    'image'          => ':attribute deve contenere un\'immagine.',
    'in'             => 'L\'attributo selezionato :attribute non è valido.',
    'in_array'       => 'Il campo :attribute non esiste in :other.',
    'integer'        => ':attribute deve essere un numero intero.',
    'ip'             => ':attribute deve essere un indirizzo IP valido.',
    'json'           => ':attribute deve essere una stringa JSON valida.',
    'max'            => [
        'numeric' => 'Attributo :attribute non può essere superiore a :max.',
        'file'    => 'Il campo :attribute non può essere superiore a :max kilobyte.',
        'string'  => 'Attributo :attribute non può essere più lungo di :max caratteri.',
        'array'   => ':attribute non può avere più di :max elementi.',
    ],
    'mimes' => 'Il campo :attribute deve contenere un file del tipo: :values.',
    'min'   => [
        'numeric' => 'Attributo :attribute deve essere almeno :min.',
        'file'    => ':attribute deve essere almeno :min kilobyte.',
        'string'  => 'Attributo :attribute deve essere almeno :min caratteri.',
        'array'   => 'Attributo :attribute deve avere almeno :min elementi.',
    ],
    'not_in'               => 'L\'attributo selezionato :attribute non è valido.',
    'numeric'              => 'Il campo :attribute deve essere un numero.',
    'present'              => 'Il campo :attribute deve essere presente.',
    'regex'                => 'Il formato di :attribute non è valido.',
    'required'             => 'Il campo :attribute è richiesto.',
    'required_if'          => 'Campo di :attribute è richiesto quando :other è :value.',
    'required_unless'      => 'Il campo :attribute è obbligatorio a meno che :other è presente in :values.',
    'required_with'        => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all'    => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without'     => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Campo di :attribute è richiesto quando sono presenti :values.',
    'same'                 => 'I campi :attribute e :other devono corrispondere.',
    'size'                 => [
        'numeric' => 'Attributo :attribute deve essere :size.',
        'file'    => ':attribute deve essere di :size kilobytes.',
        'string'  => ':attribute deve essere di :size caratteri.',
        'array'   => 'Il campo :attribute deve contenere :size elementi.',
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
