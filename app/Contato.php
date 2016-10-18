<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contato';
    public $timestamps = false;

    protected $guarded = [
        'id'
    ];

    public function assistencia_tecnica(){
        return $this->hasOne('App\Assistencia_tecnica');
    }

    public function departamento(){
        return $this->hasOne('App\Departamento');
    }

}
