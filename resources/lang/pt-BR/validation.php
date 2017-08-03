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
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after'      => 'O campo :attribute deverá conter uma data posterior a :date.',
    'alpha'      => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números, e hifens.',
    'alpha_num'  => 'O campo :attribute só pode conter letras e números.',
    'array'      => 'O campo :attribute deve ser um vetor.',
    'before'     => 'O campo :attribute deverá conter uma data anterior a :date.',
    'between'    => [
        'numeric' => 'O campo :attribute deverá conter uma data anterior a :date.',
        'file'    => 'O campo :attribute deverá ter um valor entre :min - :max.',
        'string'  => 'O campo :attribute deverá ter um tamanho entre :min - :max kilobytes.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'        => 'O campo :attribute deve ter entre :min e :max itens.',
    'confirmed'      => 'O campo :attribute deve ser verdadeiro ou falso.',
    'date'           => 'A confirmação do :attribute é inválida ou não correspondente.',
    'date_format'    => 'O campo :attribute não contém uma data válida.',
    'different'      => 'A data indicada para o campo :attribute não respeita o formato :format.',
    'digits'         => 'Os campos :attribute e :other devem conter valores diferentes.',
    'digits_between' => 'O campo :attribute deve conter :digits dígitos.',
    'email'          => 'O campo :attribute deve conter entre :min a :max dígitos.',
    'exists'         => 'O campo :attribute tem que ser um e-mail válido.',
    'distinct'       => 'O campo :attribute tem um valor duplicado.',
    'filled'         => 'O formato de :attribute é inválido.',
    'image'          => 'O :attribute deve ser uma imagem.',
    'in'             => 'O :attribute deve ser uma imagem.',
    'in_array'       => 'O campo :attribute não existe em :other.',
    'integer'        => 'O valor selecionado para o campo :attribute é inválido.',
    'ip'             => 'O campo :attribute deve ser um número inteiro.',
    'json'           => 'O :attribute tem que ser uma string JSON válida.',
    'max'            => [
        'numeric' => 'O campo :attribute deve ser um IP válido.',
        'file'    => 'O campo :attribute não pode ser maior do que :max.',
        'string'  => 'O campo :attribute não deverá ter um tamanho superior a :max kilobytes.',
        'array'   => 'A: atributo não pode ter mais de que :max itens.',
    ],
    'mimes' => 'A: atributo não pode ter mais de que :max itens.',
    'min'   => [
        'numeric' => 'O campo :attribute deverá conter um arquivo do tipo: :values.',
        'file'    => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O :attribute deve ter pelo menos :min kilobytes.',
        'array'   => 'O campo :attribute deverá conter no mínimo :min caracteres.',
    ],
    'not_in'               => 'O campo :attribute deve ter pelo menos :min itens.',
    'numeric'              => 'O valor selecionado para o campo :attribute é inválido.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O campo :attribute deve ser um número.',
    'required'             => 'O formato de :attribute é inválido.',
    'required_if'          => 'O campo :attribute é obrigatório.',
    'required_unless'      => 'O campo :attribute é obrigatório a não ser que :other estiver em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'same'                 => 'O campo :attribute é necessário quando não há :values presentes.',
    'size'                 => [
        'numeric' => 'Os campos :attribute e :other devem ser iguais.',
        'file'    => 'O :attribute deve ter :size kilobytes.',
        'string'  => 'O :attribute deve ter :size caracteres.',
        'array'   => 'O :attribute deve ter :size caracteres.',
    ],
    'string'   => 'O campo :attribute deve ter :size itens.',
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
