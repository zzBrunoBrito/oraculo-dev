<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistencia_tecnica extends Model
{
    protected $table = 'assistencia_tecnica';
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
