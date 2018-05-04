<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    public function images()
    {
        return $this->hasMany('App\PreviewImage');
    }
}
