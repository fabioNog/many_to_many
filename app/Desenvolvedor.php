<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Desenvolvedor extends Model
{
    protected $table = 'desenvolvedores';

    function projetos(){
        return $this->belongsToMany("App\Projeto","alocacoes");
    }
}
