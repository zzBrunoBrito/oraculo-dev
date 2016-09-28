@extends('layouts.app')

@section('title','Oráculo')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Menu</div> !-->
                <fieldset>
                <legend style='text-align: center'>Bem vindo!</legend><fieldset>
                <div class="panel-body">
                    <a href='/registerprof' class="btn btn-primary btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> 
                                    Cadastrar Profissional
                    </a>
                    <a href='#' class="btn btn-primary btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> 
                                    Cadastrar Equipamento
                    </a>
                    </br>
                </div>
                

            </div>
        </div>
    </div>
</div>
@endsection
