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

        <!--
        Tabela com tuas viadagens de responsivo e tudo mais...
        E tbm que dê pra clicar nela, e descer um menuzim, que vai ser só outra tabela(s).
        Manda só o codigo de uma aki mesmo, q eu faço minhas gambiarras pro resto <3 :v
        obs: Vai ter tbm os 'títulos' em cima,só o nome das colunas, faça legalzim e.e
        obs2: Gambatte Lucas-kun!
        obs3: Faça logo, vagabundo! u.u
        Ex pra tu mandar:

        <table style="width:100%">
        <tr>
        <th>Firstname</th>
        <th>Lastname</th> 
        <th>Age</th>
        </tr>
        <tr>
        <td>Jill</td>
        <td>Smith</td> 
        <td>50</td>
        </tr>
        <tr>
        <td>Eve</td>
        <td>Jackson</td> 
        <td>94</td>
        </tr>
        </table>
        
        !-->

        </table>

        </div>
    </div>
</div>

@endsection