<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    function central(){
        return $this->belongsTo('App\Central');
    }
}
