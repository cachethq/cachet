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
        'numeric' => ':attribute musí být mezi :min a :max.',
        'file'    => ':attribute musí mít mezi :min a :max kB.',
        'string'  => ':attribute musí mít délku rozmezí :min a :max znaků.',
        'array'   => ':attribute musí mít mezi :min a :max položkami.',
    ],
    'boolean'        => ':attribute musí mít hodnotu pravda nebo nepravda.',
    'confirmed'      => 'Potvrzení :attribute se neshoduje.',
    'date'           => ':attribute není platné datum.',
    'date_format'    => ':attribute se neshoduje se správným formátem :format.',
    'different'      => ':attribute a :other se musí lišit.',
    'digits'         => ':attribute musí obsahovat :digits číslic.',
    'digits_between' => ':attribute musí být v rozmezí :min a :max číslic.',
    'email'          => ':attribute musí být platná e-mailová adresa.',
    'exists'         => 'Vybraný :attribute je neplatný.',
    'filled'         => 'Pole :attribute je vyžadováno.',
    'image'          => ':attribute musí být obrázek.',
    'in'             => 'Vybraný :attribute je neplatný.',
    'integer'        => ':attribute musí být celé číslo.',
    'ip'             => ':attribute musí být platná IP adresa.',
    'json'           => 'The :attribute must be a valid JSON string.',
    'max'            => [
        'numeric' => ':attribute nesmí být větší než :max.',
        'file'    => ':attribute nesmí být větší než :max kB.',
        'string'  => 'Atribut nesmí být delší než :max znaků.',
        'array'   => 'Atribut nesmí mít více než :max položek.',
    ],
    'mimes' => ':attribute musí být soubor typu: :values.',
    'min'   => [
        'numeric' => ':attribute musí být alespoň :min.',
        'file'    => 'Atribut musí mít alespoň :min kB.',
        'string'  => 'Atribut musí být dlouhý alespoň :min znaků.',
        'array'   => 'Atribut musí mít alespoň :min položek.',
    ],
    'not_in'               => 'Vybraný :attribute je neplatný.',
    'numeric'              => ':attribute musí být číslo.',
    'regex'                => 'Formát :attribute je neplatný.',
    'required'             => 'Pole :attribute je vyžadováno.',
    'required_if'          => 'Pole :attribute je požadováno, když :other je :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_with_all'    => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_without'     => 'Pole :attribute je požadováno, když je zadané :values.',
    'required_without_all' => ':attribute je nutný, pokud není zadaná žádná :values.',
    'same'                 => ':attribute a :other se musí shodovat.',
    'size'                 => [
        'numeric' => ':attribute must mít délku :size.',
        'file'    => 'Atribut musí mít :size kB.',
        'string'  => 'Atribut musí mít :size znaků.',
        'array'   => 'Atribut musí obsahovat :size položek.',
    ],
    'string'   => 'Atribut musí být textový řetězec.',
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
