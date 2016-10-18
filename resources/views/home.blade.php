@extends('layouts.app')
@section('title','Oráculo')

<!--Se ele não estiver logado, redireciona !-->
@if(Auth::check())

@section('content')
<div class="container-fluid">
    <div class="panel panel-default ">
        <div class="panel-heading">Notificações</div>
        <div class="panel-body" style="">

            <div class="panel panel-default" id="teste">
                <div class="panel-body">teste
                    <button type="button" class="close" data-target="#teste" data-dismiss="alert">
                        <span class="sr-only">Close</span>Close
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@else
    
    @section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Menu</div> !-->

                <div class="panel-body">
                    Você não está logado!</br>
                    Redirecionando...
                    <?php
                    header( "refresh:3;url=/login" );
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>


    @endsection
@endif


