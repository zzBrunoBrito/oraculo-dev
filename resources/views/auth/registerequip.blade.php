@section('title','Oráculo-Registro')
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <fieldset><legend>Registro de Equipamentos</legend></fieldset>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register-equip') }}">
                        {{ csrf_field() }}

                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="form-group">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="num_patrimonio" class="col-md-4 control-label">Numero de Patrimonio</label>

                            <div class="col-md-6">
                                <input id="num_patrimonio" type="text" class="form-control" name="num_patrimonio">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="num_serie" class="col-md-4 control-label">Numero de Série</label>

                            <div class="col-md-6">
                                <input id="num_serie" type="text" class="form-control" name="num_serie">

                            </div>
                            </div>

                            <label for="codigo" class="col-md-4 control-label">Código</label>

                             <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="codigo">
                                  </div>
                                 </div>

                            <div class="form-group">
                            <label for="grupo_executor" class="col-md-4 control-label">Grupo Executor</label>

                            <div class="col-md-6">
                                <input id="grupo_executor" type="text" class="form-control" name="grupo_executor">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="modelo" class="col-md-4 control-label">Modelo</label>

                            <div class="col-md-6">
                                <input id="modelo" type="text" class="form-control" name="modelo">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="marca" class="col-md-4 control-label">Marca</label>

                            <div class="col-md-6">
                                <input id="marca" type="text" class="form-control" name="marca">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="fabricante" class="col-md-4 control-label">Fabricante</label>

                            <div class="col-md-6">
                                <input id="fabricante" type="text" class="form-control" name="fabricante">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="local_unidade" class="col-md-4 control-label">Local da Unidade</label>

                            <div class="col-md-6">
                                <input id="local_unidade" type="text" class="form-control" name="local_unidade">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="recursos" class="col-md-4 control-label">Tipo de Bens</label>

                            <div class="col-md-6">
                                <input id="recursos" type="radio" name="recursos" value="0">Próprio<br>
                                <input id="recursos" type="radio" name="recursos" value="1">Comodato<br>
                                <input id="recursos" type="radio" name="recursos" value="2">Doação<br>

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="data_instalacao" class="col-md-4 control-label">Data da Instalação</label>

                            <div class="col-md-6">
                                <input id="data_instalacao" type="date" class="form-control" name="data_instalacao">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="num_pasta" class="col-md-4 control-label">Número da Pasta</label>

                            <div class="col-md-6">
                                <input id="num_pasta" type="text" class="form-control" name="num_pasta">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="tensao" class="col-md-4 control-label">Tensão</label>

                            <div class="col-md-6">
                                <input id="tensao" type="text" class="form-control" name="tensao">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="potencia" class="col-md-4 control-label">Potencia</label>

                            <div class="col-md-6">
                                <input id="potencia" type="text" class="form-control" name="potencia">

                            </div>
                            </div>

                            <fieldset><legend>Assistência Tecnica</legend>
                            <div class="form-group">
                            <label for="telefone" class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control" name="telefone">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="ramal" class="col-md-4 control-label">Ramal</label>

                            <div class="col-md-6">
                                <input id="ramal" type="text" class="form-control" name="ramal">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="assistencia_tecnica_nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="assistencia_tecnica_nome" type="text" class="form-control" name="assistencia_tecnica_nome">

                            </div>
                            </div>
                            </fieldset>

                            <fieldset><legend>Departamento</legend>
                            <div class="form-group">
                            <label for="equipamento_nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="equipamento_nome" type="text" class="form-control" name="equipamento_nome">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="servico" class="col-md-4 control-label">Serviço</label>

                            <div class="col-md-6">
                                <input id="servico" type="text" class="form-control" name="servico">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="responsavel" class="col-md-4 control-label">Responsável</label>

                            <div class="col-md-6">
                                <input id="responsavel" type="text" class="form-control" name="responsavel">

                            </div>
                            </div>
                            </fieldset>

                            <fieldset><legend>Material</legend>
                            <div class="form-group">
                            <label for="material_nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="material_nome" type="text" class="form-control" name="material[1][nome]">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="codigo" class="col-md-4 control-label">Codigo</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="material[1][codigo]">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="quantidade" class="col-md-4 control-label">Quantidade</label>

                            <div class="col-md-6">
                                <input id="quantidade" type="number" class="form-control" name="material[1][quantidade]">

                            </div>
                            </div>
                            </fieldset>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
