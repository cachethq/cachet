<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Watson\Validating\ValidatingTrait;

class Subscriber extends Eloquent
{
    use ValidatingTrait;
    use SoftDeletingTrait;

    protected $rules = [
        'email' => 'required|email',
    ];

    protected $fillable = ['email'];
}
