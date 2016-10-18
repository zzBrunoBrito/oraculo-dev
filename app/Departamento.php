<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    public $timestamps = false;

    protected $guarded = [
        'id'
    ];

    public function contato(){
        return $this->belongsTo('App\Contato');
    }

    public function equipamento(){
        return $this->belongsTo('App\Equipamento');
    }
}
