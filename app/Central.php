<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Central extends Model
{
    function lojas(){

        return $this->hasMany('App\Loja');
    }
}
