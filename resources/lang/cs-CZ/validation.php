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
        'string'  => ':attribute musí mít délku v rozmezí :min a :max znaků.',
        'array'   => ':attribute musí mít mezi :min a :max položkami.',
    ],
    'boolean'        => ':attribute musí mít hodnotu pravda nebo nepravda.',
    'confirmed'      => 'Potvrzení :attribute se neshoduje.',
    'date'           => ':attribute není platné datum.',
    'date_format'    => ':attribute se neshoduje se správným formátem :format.',
    'different'      => ':attribute a :other se musí lišit.',
    'digits'         => ':attribute musí obsahovat :digits číslice.',
    'digits_between' => ':attribute musí být v rozmezí :min a :max číslic.',
    'email'          => ':attribute musí být platná e-mailová adresa.',
    'exists'         => 'Vybraný :attribute je neplatný.',
    'distinct'       => ':attribute má duplicitní hodnotu.',
    'filled'         => 'Pole :attribute je vyžadováno.',
    'image'          => ':attribute musí být obrázek.',
    'in'             => 'Vybraný :attribute je neplatný.',
    'in_array'       => ':attribute není v :other.',
    'integer'        => ':attribute musí být celé číslo.',
    'ip'             => ':attribute musí být platná IP adresa.',
    'json'           => ': attribute musí být ve formátu JSON.',
    'max'            => [
        'numeric' => ':attribute nesmí být větší než :max.',
        'file'    => ':attribute nesmí být větší než :max kb.',
        'string'  => ':attribute nesmí být delší než :max znaků.',
        'array'   => 'Atribut nesmí mít více než :max položek.',
    ],
    'mimes' => ':attribute musí být soubor typu: :values.',
    'min'   => [
        'numeric' => ':attribute musí být alespoň :min.',
        'file'    => 'Atribut musí mít alespoň :min kB.',
        'string'  => ':attribute musí být dlouhý alespoň :min znaků.',
        'array'   => ':attribute musí mít alespoň :min položek.',
    ],
    'not_in'               => 'Vybraný :attribute je neplatný.',
    'numeric'              => 'Pole :attribute musí být číslo.',
    'present'              => 'Pole :attribute je vyžadováno.',
    'regex'                => 'Formát :attribute je neplatný.',
    'required'             => 'Pole :attribute je vyžadováno.',
    'required_if'          => 'Pole :attribute je požadováno, když :other je :value.',
    'required_unless'      => 'Pole :attribute je požadováno, pokud :other není v :value.',
    'required_with'        => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_with_all'    => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_without'     => 'Pole :attribute je požadováno když :values není k dispozici.',
    'required_without_all' => 'Pole :attribute je požadováno když :values není k dispozici.',
    'same'                 => ':attribute a: :other se musí shodovat.',
    'size'                 => [
        'numeric' => ':attribute musí mít velikost: :size.',
        'file'    => 'Atribut musí mít :size kB.',
        'string'  => 'Atribut musí mít :size znaků.',
        'array'   => ':attribute musí obsahovat :size položek.',
    ],
    'string'   => ':attribute musí být text.',
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