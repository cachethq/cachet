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

    'accepted'   => ':attribute trebuie să fie acceptat.',
    'active_url' => ':attribute nu este un URL valid.',
    'after'      => ':attribute trebuie să fie o dată după :date.',
    'alpha'      => ':attribute poate să conțină numai litere.',
    'alpha_dash' => ':attribute poate să conțină numai litere, cifre şi semne de punctuație.',
    'alpha_num'  => ':attribute poate să conțină numai litere şi cifre.',
    'array'      => ':attribute trebuie să fie o matrice.',
    'before'     => ':attribute trebuie să fie o dată înainte de :date.',
    'between'    => [
        'numeric' => ':attribute trebuie să fie cuprins între :min şi :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'        => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed'      => 'Confirmarea :attribute nu se potriveşte.',
    'date'           => ':attribute nu este o dată validă.',
    'date_format'    => ':attribute nu se potrivește cu formatul :format.',
    'different'      => ':attribute şi :other trebuie să fie diferite.',
    'digits'         => ':attribute trebuie să fie de :digits cifre.',
    'digits_between' => ':attribute trebuie să aibă între :min şi :max cifre.',
    'email'          => ':attribute trebuie să fie o adresă de e-mail validă.',
    'exists'         => ':attribute selectat nu este valid.',
    'filled'         => 'Câmpul :attribute este obligatoriu.',
    'image'          => ':attribute trebuie să fie o imagine.',
    'in'             => ':attribute selectat nu este valid.',
    'integer'        => ':attribute trebuie să fie număr întreg.',
    'ip'             => ':attribute trebuie să fie o adresă IP validă.',
    'json'           => 'The :attribute must be a valid JSON string.',
    'max'            => [
        'numeric' => ':attribute nu poate fi mai mare de :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => ':attribute trebuie să fie un fişier de tip: :values.',
    'min'   => [
        'numeric' => ':attribute trebuie să aibă cel puțin :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => ':attribute selectat nu este valid.',
    'numeric'              => ':attribute trebuie să fie un număr.',
    'regex'                => 'Formatul :attribute nu este valid.',
    'required'             => 'Câmpul :attribute este obligatoriu.',
    'required_if'          => 'Câmpul :attribute este obligatoriu atunci când :other este :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'Câmpul :attribute este obligatoriu atunci când :values este prezent.',
    'required_with_all'    => 'Câmpul :attribute este obligatoriu atunci când :values este prezent.',
    'required_without'     => 'Câmpul :attribute este obligatoriu atunci când :values nu este prezent.',
    'required_without_all' => 'Câmpul :attribute este obligatoriu atunci când nici una din :values nu sunt prezente.',
    'same'                 => ':attribute și :other trebuie să coincidă.',
    'size'                 => [
        'numeric' => ':attribute trebuie să aibă :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'   => 'The :attribute must be a string.',
    'timezone' => ':attribute trebuie să fie o zonă validă.',
    'unique'   => ':attribute este deja folosit.',
    'url'      => 'Formatul :attribute nu este valid.',

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
            'rule-name' => 'mesaj-personalizat',
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
