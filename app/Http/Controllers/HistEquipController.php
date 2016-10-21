<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class HistEquipController extends Controller
{
    public function consulta()
    {
        $equip = DB::table('equipamento')->get();

        return view('historicoEquip', ['equip' => $equip]);
    }
}
