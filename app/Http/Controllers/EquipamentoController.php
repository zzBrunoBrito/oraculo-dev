<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EquipamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'doValidate', 'create']);
    }

    protected function doValidate(){
     //
    }

    protected function create(Request $data)
    {
        $equipamentoData = [
            'nome' => $data['nome'],
            'num_patrimonio' => $data['num_patrimonio'],
            'num_serie' => $data['num_serie'],
            'codigo' => $data['codigo'],
            'grupo_executor' => $data['grupo_executor'],
            'modelo' => $data['modelo'],
            'marca' => $data['marca'],
            'fabricante' => $data['fabricante'],
            'local_unidade' => $data['local_unidade'],
            'recursos' => $data['recursos'],
            'data_instalacao' => $data['data_instalacao'],
            'num_pasta' => $data['num_pasta'],
            'tensao' => $data['tensao'],
            'potencia' => $data['potencia'],
        ];

        $contatoData = [
            'telefone' => $data['telefone'],
            'ramal' => $data['ramal'],
        ];

        $assistenciaTecnicaData = [
            'nome' => $data['assistencia_tecnica_nome'],
        ];

        $departamentoData = [
            'nome' => $data['equipamento_nome'],
            'servico' => $data['servico'],
            'responsavel' => $data['responsavel'],
        ];

        $materialData = [
            'nome' => $data['material_nome'],
            'codigo' => $data['codigo'],
            'quantidade' => $data['quantidade']
        ];
    }
}
