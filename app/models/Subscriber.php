<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Watson\Validating\ValidatingTrait;

class Subscriber extends Model
{
    use SoftDeletingTrait, ValidatingTrait;

    protected $rules = [
        'email' => 'required|email',
    ];

    protected $fillable = ['email'];
}
