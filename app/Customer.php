<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use Notifiable;



    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }
}

