<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = array(
        'fname',
        'lname',
        'tel',
        'email',
        'message',
    );
}
