<?php

namespace App\Http\Controllers;

use App\Assistencia_tecnica;
use App\Contato;
use App\Equipamento;
use Illuminate\Http\Request;

use App\Http\Requests;

class EquipamentoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'doValidate', 'create']);
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

        $materialData = $data['material']['1'];


        $equipamento = Equipamento::create($equipamentoData);
        $contato = Contato::create($contatoData);
        $assistenciaTecnicaData['contato_id'] = $contato->id;
        $equipamento->assistencia_tecnica()->create($assistenciaTecnicaData);
        $departamentoData['contato_id'] = $contato->id;
        $equipamento->departamento()->create($departamentoData);
        $equipamento->material()->create($materialData);

        return redirect()->route('home');

    }
}
