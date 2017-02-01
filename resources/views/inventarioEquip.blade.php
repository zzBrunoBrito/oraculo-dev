@extends('layouts.app')
@section('title','Oráculo-Inventario')
@section('content')

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
					<tr>
            		<td class="col-md-2">
                	<a href="#">

                	{{ $e->nome }}</a>

            		</td>  
                
            		<td class="col-md-2" style="text-align: center">
                		{{$e->data_instalacao}}
            		</td>
            
            		<td class="col-md-2" style="text-align: center">
                		{{$e->created_at}}
            		</td>
            		</tr>
        		@endforeach

			</table>    

        </div>
    </div>
</div>


@endsection