<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';

    protected $guarded = [
        'id'
    ];

    public function equipamento(){
        return $this->belongsTo('App\Equipamento');
    }
}
