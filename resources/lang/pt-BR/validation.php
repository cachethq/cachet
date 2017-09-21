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

    'accepted'   => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não contém uma URL válida.',
    'after'      => 'O campo :attribute deverá conter uma data posterior a :date.',
    'alpha'      => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números, e hifens.',
    'alpha_num'  => 'O campo :attribute só pode conter letras e números.',
    'array'      => 'O campo :attribute deve ser um vetor.',
    'before'     => 'O campo :attribute deverá conter uma data anterior a :date.',
    'between'    => [
        'numeric' => 'O campo :attribute deverá ter um valor entre :min - :max.',
        'file'    => 'O campo :attribute deve estar entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve ter entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'        => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'      => 'A confirmação do campo :attribute não corresponde.',
    'date'           => 'O campo :attribute não é uma data válida.',
    'date_format'    => 'O campo :attribute não corresponde ao formato :format.',
    'different'      => 'O campo :attribute e :other devem ser diferentes.',
    'digits'         => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'email'          => 'O campo :attribute deve ser um endereço de email válido.',
    'exists'         => 'O campo :attribute é inválido.',
    'distinct'       => 'O campo :attribute tem um valor duplicado.',
    'filled'         => 'O campo :attribute é obrigatório.',
    'image'          => 'O :attribute deve ser uma imagem.',
    'in'             => 'O campo :attribute é inválido.',
    'in_array'       => 'O campo :attribute não existe em :other.',
    'integer'        => 'O campo :attribute deve ser um número inteiro.',
    'ip'             => 'O campo :attribute deve ser um endereço de IP válido.',
    'json'           => 'O :attribute tem que ser uma string JSON válida.',
    'max'            => [
        'numeric' => 'O campo :attribute não deve ser maior que :max.',
        'file'    => 'O campo :attribute não deve ser maior que :max kilobytes.',
        'string'  => 'O campo :attribute não deve ser maior que :max caracteres.',
        'array'   => 'A: atributo não pode ter mais de que :max itens.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min'   => [
        'numeric' => 'O campo :attribute deve ser no mínimo :min.',
        'file'    => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O campo :attribute deve ter no mínimo :min caracteres.',
        'array'   => 'O campo :attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'O campo :attribute é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O formato de :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório a não ser que :other esteja entre :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same'                 => 'O campo :attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file'    => 'O :attribute deve ter :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O campo :attribute deve ter :size itens.',
    ],
    'string'   => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser uma zona válida.',
    'unique'   => 'O :attribute já existe.',
    'url'      => 'O formato de :attribute é inválido.',

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
            'rule-name' => 'Mensagem-personalizada',
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
