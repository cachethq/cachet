<?php

use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Subscriber extends Eloquent {
    use ValidatingTrait;
    use SoftDeletingTrait;

    protected $rules = [
        'email' => 'required|email'
    ];

    protected $fillable = ['email'];
}