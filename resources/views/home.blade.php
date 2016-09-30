@extends('layouts.app')
@section('title','Oráculo')
@section('content')
<div class="container">
    <div class="row">
        {{--<div class="navbar navbar-default navbar-fixed-top">--}}
            {{--<div class="container-fluid">--}}
                {{--<button class="btn">teste</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Menu</div> !-->
                <legend style='text-align: center'>Bem vindo!</legend>
                <div class="panel-body">

                    <a href='/registerprof' class="btn btn-primary btn-block">
                        <i class="fa fa-btn fa-sign-in"></i>
                        Cadastrar Profissional
                    </a>

                    <a href='#' class="btn btn-primary btn-block">
                        <i class="fa fa-btn fa-sign-in"></i>
                        Cadastrar Equipamento
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="panel panel-default ">
            <div class="panel-heading">Notificações</div>
            <div class="panel-body">
                <div class="jumbotron">teste</div>
                <div class="jumbotron">teste</div>
                <div class="jumbotron">teste</div>
                <div class="jumbotron">teste</div>
            </div>
        </div>
    </div>
</div>
@endsection
