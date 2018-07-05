<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['lastname', 'firstname', 'middlename', 'gender', 'address', 'phone', 'email'];
}
