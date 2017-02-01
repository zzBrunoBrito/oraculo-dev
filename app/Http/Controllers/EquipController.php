<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class EquipController extends Controller
{
    public function consultaHistorico()
    {	
    	//eu testo se a variável é realmente um inteiro, se nao for, seto 1
    	//pego o numero da pagina, e traz do banco somente os dessa pagina, sendo 20 resultados por pagina
    	
    	if(Input::get('p') && var_dump( is_int( Input::get('p') ) ) ){
    		$p = Input::get('p');
    	}else{
    		$p = 1;
    	}
    	$p = ($p-1) * 20;
        $equip = DB::select("select * from equipamento order by created_at desc limit 20 offset ?",[$p]);

        return view('historicoEquip', ['equip' => $equip]);
    }

    public function consultaInventario()
    {	
    	//eu testo se a variável é realmente um inteiro, se nao for, seto 1
    	//pego o numero da pagina, e traz do banco somente os dessa pagina, sendo 20 resultados por pagina
    	
    	if(Input::get('p') && var_dump( is_int( Input::get('p') ) ) ){
    		$p = Input::get('p');
    	}else{
    		$p = 1;
    	}
    	$p = ($p-1) * 20;
        $equip = DB::select("select * from equipamento order by created_at desc limit 20 offset ?",[$p]);

        return view('inventarioEquip', ['equip' => $equip]);
    }
}
