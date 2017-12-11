<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    protected $table = 'contact_data';
    protected $fillable = ['user_id','name', 'email', 'phone','address','company','birthday'];

}
