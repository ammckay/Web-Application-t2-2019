<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    function user() {
        return $this->belongsToMany('App\User');
    }

    function product() {
        return $this->belongsToMany('App\Product');
    }

    function manufacturer() {
        return $this->belongsTo('App\Manufacturer');
    }
}
