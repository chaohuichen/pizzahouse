<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protected $table = 'some_name';

    //cast the data type  turn it into json string
    protected $casts = ['toppings' => 'array'];
}
