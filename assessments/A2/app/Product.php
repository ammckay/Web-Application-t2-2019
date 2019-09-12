<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];

    function restaurant() {
        return $this->belongsTo('App\Restaurant');
    }
}
