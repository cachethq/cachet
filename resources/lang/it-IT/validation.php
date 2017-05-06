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
        'numeric' => ':attribute deve essere compreso tra :min e :max.',
        'file'    => ':attribute deve essere compreso tra :min e :max kilobyte.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => ':attributo deve avere tra :min e :max elementi.',
    ],
    'boolean'        => 'The :attribute field must be true or false.',
    'confirmed'      => 'The :attribute confirmation does not match.',
    'date'           => 'Il :attribute non è una data valida.',
    'date_format'    => 'Il :attribute non corrisponde al formato :format.',
    'different'      => 'The :attribute and :other must be different.',
    'digits'         => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'email'          => 'The :attribute must be a valid email address.',
    'exists'         => 'The selected :attribute is invalid.',
    'distinct'       => 'Il campo :attribute ha un valore duplicato.',
    'filled'         => 'The :attribute field is required.',
    'image'          => ':attribute deve contenere un\'immagine.',
    'in'             => 'The selected :attribute is invalid.',
    'in_array'       => 'Il campo :attribute non esiste in :other.',
    'integer'        => ':attribute deve essere un numero intero.',
    'ip'             => ':attribute deve essere un indirizzo IP valido.',
    'json'           => ':attribute deve essere una stringa JSON valida.',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute non può avere più di :max elementi.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => ':attribute deve essere almeno :min kilobyte.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'Il campo :attribute deve essere presente.',
    'regex'                => 'Il formato di :attribute non è valido.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'Il campo :attribute è obbligatorio a meno che :other è presente in :values.',
    'required_with'        => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all'    => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => ':attribute deve essere di :size kilobytes.',
        'string'  => ':attribute deve essere di :size caratteri.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
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