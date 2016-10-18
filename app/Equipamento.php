<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamento';


    protected $guarded = [
        'id'
    ];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }

    public function assistencia_tecnica(){
        return $this->hasOne('App\Assistencia_tecnica');
    }

    public function departamento(){
        return $this->hasOne('App\Departamento');
    }

    public function material(){
        return $this->hasMany('App\Material');
    }

}
