@section('title','Oráculo-Histórico')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default ">
        
        <div class="panel-body">
        <table style="width:100%">
        <tr>
            <th>Nome do Equipamento</th>
            <th>Data de Instalação</th> 
            <th>Data de Registro</th>
        </tr>
        
        <?php
        foreach ($equip as $e) {
            echo '<tr>';
            echo '<td>'.$e->nome.'</td>';
            echo '<td>'.$e->data_instalacao.'</td>';
            echo '<td>'.$e->created_at.'</td>';
        }
        ?>
        </table>

        </div>
    </div>
</div>

@endsection