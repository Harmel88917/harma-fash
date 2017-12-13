<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    public $table = 'checkout';
 
public $fillable = ['name','addressLine','city','state','country','phone'];
}
