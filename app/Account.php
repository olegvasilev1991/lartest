<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'editusers';
    protected $fillable = [
        'firstname',
        'lastname',
        'birthday',
        'sex',
        'user_id'
    ];
}
