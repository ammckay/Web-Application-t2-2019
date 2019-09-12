<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    function products() {
        return $this->hasMany('App\Product');
    }
}
