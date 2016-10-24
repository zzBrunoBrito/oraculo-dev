<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class HistEquipController extends Controller
{
    public function consulta()
    {	//pego o numero da pagina, e traz do banco somente os dessa pagina, sendo 20 resultados por pagina
    	$p = (Input::get('p'))? Input::get('p') : 1;
    	$p = ($p-1) * 20;
        $equip = DB::select("select * from equipamento order by created_at desc limit 20 offset ?",[$p]);

        return view('historicoEquip', ['equip' => $equip]);
    }
}
