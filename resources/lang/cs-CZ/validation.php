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
        'numeric' => ':attribute musí být datum před :date.',
        'file'    => ':attribute musí mít hodnou mezi :min a :max.',
        'string'  => ':attribute musí mít velikost v rozmezí :min až :max kilobytů.',
        'array'   => ':attribute musí mít mezi :min a :max položkami.',
    ],
    'boolean'        => ':attribute musí mít mezi :min a :max položkami.',
    'confirmed'      => ':attribute musí mít hodnotu pravda nebo nepravda.',
    'date'           => 'Potvrzení :attribute se neshoduje.',
    'date_format'    => ':attribute není platné datum.',
    'different'      => ':attribute se neshoduje se správným formátem :format.',
    'digits'         => ':attribute a :other se musí lišit.',
    'digits_between' => ':attribute musí obsahovat :digits číslice.',
    'email'          => ':attribute musí být v rozmezí :min a :max číslic.',
    'exists'         => ':attribute musí být platná e-mailová adresa.',
    'distinct'       => ':attribute má duplicitní hodnotu.',
    'filled'         => 'Formát :attribute je neplatný.',
    'image'          => ':attribute musí být obrázek.',
    'in'             => ':attribute musí být obrázek.',
    'in_array'       => ':attribute není v :other.',
    'integer'        => 'Vybraný :attribute je neplatný.',
    'ip'             => ':attribute musí být celé číslo.',
    'json'           => ': attribute musí být ve formátu JSON.',
    'max'            => [
        'numeric' => ':attribute musí být platná IP adresa.',
        'file'    => ':attribute nesmí být větší než :max.',
        'string'  => ':attribute nesmí být větší než :max kb.',
        'array'   => 'Atribut nesmí mít více než :max položek.',
    ],
    'mimes' => 'Atribut nesmí mít více než :max položek.',
    'min'   => [
        'numeric' => ':attribute musí být soubor typu: :values.',
        'file'    => 'Atribut musí mít alespoň :min kB.',
        'string'  => 'Atribut musí mít alespoň :min kB.',
        'array'   => ':attribute musí být dlouhý alespoň :min znaků.',
    ],
    'not_in'               => ':attribute musí mít alespoň :min položek.',
    'numeric'              => 'Vybraný :attribute je neplatný.',
    'present'              => 'Pole :attribute je vyžadováno.',
    'regex'                => 'Pole :attribute musí být číslo.',
    'required'             => 'Formát :attribute je neplatný.',
    'required_if'          => 'Pole :attribute je vyžadováno.',
    'required_unless'      => 'Pole :attribute je požadováno, pokud :other není v :value.',
    'required_with'        => 'Pole :attribute je požadováno, když :other je :value.',
    'required_with_all'    => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_without'     => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_without_all' => 'Pole :attribute je požadováno když :values není k dispozici.',
    'same'                 => 'Pole :attribute je požadováno když :values není k dispozici.',
    'size'                 => [
        'numeric' => ':attribute a: :other se musí shodovat.',
        'file'    => 'Atribut musí mít :size kB.',
        'string'  => 'Atribut musí mít :size znaků.',
        'array'   => 'Atribut musí mít :size znaků.',
    ],
    'string'   => ':attribute musí obsahovat :size položek.',
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
