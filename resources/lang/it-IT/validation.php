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
        'file'    => 'The :attribute must be between :min and :max.',
        'string'  => 'The :attribute must be between :min and :max kilobytes.',
        'array'   => ':attributo deve avere tra :min e :max elementi.',
    ],
    'boolean'        => ':attributo deve avere tra :min e :max elementi.',
    'confirmed'      => 'The :attribute field must be true or false.',
    'date'           => 'The :attribute confirmation does not match.',
    'date_format'    => 'The :attribute is not a valid date.',
    'different'      => 'The :attribute does not match the format :format.',
    'digits'         => 'The :attribute and :other must be different.',
    'digits_between' => 'The :attribute must be :digits digits.',
    'email'          => 'The :attribute must be between :min and :max digits.',
    'exists'         => 'The :attribute must be a valid email address.',
    'distinct'       => 'Il campo :attribute ha un valore duplicato.',
    'filled'         => 'Il formato di :attribute non è valido.',
    'image'          => ':attribute deve contenere un\'immagine.',
    'in'             => ':attribute deve contenere un\'immagine.',
    'in_array'       => 'Il campo :attribute non esiste in :other.',
    'integer'        => 'The selected :attribute is invalid.',
    'ip'             => 'The :attribute must be an integer.',
    'json'           => ':attribute deve essere una stringa JSON valida.',
    'max'            => [
        'numeric' => 'The :attribute must be a valid IP address.',
        'file'    => 'The :attribute may not be greater than :max.',
        'string'  => 'The :attribute may not be greater than :max kilobytes.',
        'array'   => ':attribute non può avere più di :max elementi.',
    ],
    'mimes' => ':attribute non può avere più di :max elementi.',
    'min'   => [
        'numeric' => 'The :attribute must be a file of type: :values.',
        'file'    => ':attribute deve essere almeno :min kilobyte.',
        'string'  => ':attribute deve essere almeno :min kilobyte.',
        'array'   => 'The :attribute must be at least :min characters.',
    ],
    'not_in'               => 'The :attribute must have at least :min items.',
    'numeric'              => 'The selected :attribute is invalid.',
    'present'              => 'Il campo :attribute deve essere presente.',
    'regex'                => 'The :attribute must be a number.',
    'required'             => 'Il formato di :attribute non è valido.',
    'required_if'          => 'The :attribute field is required.',
    'required_unless'      => 'Il campo :attribute è obbligatorio a meno che :other è presente in :values.',
    'required_with'        => 'The :attribute field is required when :other is :value.',
    'required_with_all'    => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without'     => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'same'                 => 'The :attribute field is required when none of :values are present.',
    'size'                 => [
        'numeric' => 'The :attribute and :other must match.',
        'file'    => ':attribute deve essere di :size kilobytes.',
        'string'  => ':attribute deve essere di :size caratteri.',
        'array'   => ':attribute deve essere di :size caratteri.',
    ],
    'string'   => 'The :attribute must contain :size items.',
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
