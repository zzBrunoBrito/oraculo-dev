@section('title','Oráculo-Histórico')
@extends('layouts.app')

@section('content')

<style>
td {
    width:30%;
}
th{
    width:30%;
}

</style>


<script>

function droptable(arrow,i){
    //Adiciona a subtabela dos eventos ocorridos quando clica no equipamento
    var newTable = 
    "<table class='table table-striped' style='margin-left: 5%; width: 95%'>"+
        "<tr>"+
        "<th class='col-md-3'>Evento Ocorrido</th>"+
        "<th class='col-md-3'>Data de Instalação</th>"+ 
        "<th class='col-md-3'>Data de Registro</th>"+
        "</tr>"+

        "<tr class='table table-striped' style='text-align: left'>"+
        "<td class='col-md-3'>Quebra da correia</td>"+
        "<td class='col-md-3'>2016-10-10</td>"+
        "<td class='col-md-3'>2016-10-10</td>"+
        "</tr>"+
    "</table>";


        

    if(arrow.className == "glyphicon glyphicon-menu-right"){
        arrow.className = "glyphicon glyphicon-menu-down";

        $("#line"+i).append(newTable);
    }
    else  {
        arrow.className = "glyphicon glyphicon-menu-right";
        document.getElementById("line"+i).innerHTML = " ";
    }

}

</script>

<div class="container">
    <div class="panel panel-default ">
        
        <div class="panel-body">
        <table class="table table-striped table-responsive">
            <tr>
              <th class="col-md-2" >Nome do Equipamento</th>
              <th class="col-md-2" style="text-align: center">Data de Instalação</th> 
              <th class="col-md-2" style="text-align: center">Data de Registro</th>
            </tr>
        
        
        
        @foreach ($equip as $i=>$e) 
            <table class="table table-striped">
            <td class="col-md-2">
                <a href="#" style="color: #555555">
                <span class="glyphicon glyphicon-menu-right" onclick="droptable(this,{{$i}})">
                {{ $e->nome }}</span></a>

            </td>  
                
            <td class="col-md-2" style="text-align: center">
                {{$e->data_instalacao}}
            </td>
            
            <td class="col-md-2" style="text-align: center">
                {{$e->created_at}}
            </td>
            </table>

            <p id="line{{$i}}"></p>

        @endforeach
        </table>    

        </div>
    </div>
</div>

@endsection