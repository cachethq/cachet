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

    'accepted'   => 'Je potřeba potvrdit :attribute.',
    'active_url' => ':attribute není platná adresa URL.',
    'after'      => ':attribute musí být datum po :date.',
    'alpha'      => ':attribute může obsahovat pouze písmena.',
    'alpha_dash' => ':attribute může obsahovat pouze písmena, čísla a pomlčky.',
    'alpha_num'  => ':attribute může obsahovat pouze písmena a čísla.',
    'array'      => ':attribute musí být textové pole.',
    'before'     => ':attribute musí být datum před :date.',
    'between'    => [
        'numeric' => ':attribute musí mít hodnou mezi :min a :max.',
        'file'    => ':attribute musí mít velikost v rozmezí :min až :max kilobytů.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => ':attribute musí mít mezi :min a :max položkami.',
    ],
    'boolean'        => ':attribute musí mít hodnotu pravda nebo nepravda.',
    'confirmed'      => 'Potvrzení :attribute se neshoduje.',
    'date'           => ':attribute není platné datum.',
    'date_format'    => ':attribute se neshoduje se správným formátem :format.',
    'different'      => 'The :attribute and :other must be different.',
    'digits'         => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'email'          => 'The :attribute must be a valid email address.',
    'exists'         => 'The selected :attribute is invalid.',
    'distinct'       => ':attribute má duplicitní hodnotu.',
    'filled'         => 'The :attribute field is required.',
    'image'          => ':attribute musí být obrázek.',
    'in'             => 'The selected :attribute is invalid.',
    'in_array'       => ':attribute není v :other.',
    'integer'        => 'The :attribute must be an integer.',
    'ip'             => 'The :attribute must be a valid IP address.',
    'json'           => ': attribute musí být ve formátu JSON.',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'Atribut nesmí mít více než :max položek.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'Atribut musí mít alespoň :min kB.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'Pole :attribute je vyžadováno.',
    'regex'                => 'Formát :attribute je neplatný.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'Pole :attribute je požadováno, pokud :other není v :value.',
    'required_with'        => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_with_all'    => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'Atribut musí mít :size kB.',
        'string'  => 'Atribut musí mít :size znaků.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
    'timezone' => ':attribute musí být platná zóna.',
    'unique'   => ':attribute byl už použit.',
    'url'      => 'Formát :attribute je neplatný.',

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
            'rule-name' => 'vlastní zpráva',
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
