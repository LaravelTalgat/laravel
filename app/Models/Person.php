<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable=[
        'number','first_name','middle_name','last_name'
    ];
}
