@section('title','Oráculo-Registro')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register-prof') }}">
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

			<div class="form-group">
                            <label for="login" class="col-md-4 control-label">Login</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" name="login" >

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" >

                       
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                              
                            </div>
                        </div>
                        <fieldset><legend>Dados Pessoais</legend>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="form-group">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="cargo" class="col-md-4 control-label">Cargo</label>

                            <div class="col-md-6">
                                <input id="cargo" type="text" class="form-control" name="cargo">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="dtnasc" class="col-md-4 control-label">Data de Nasc.</label>

                            <div class="col-md-6">
                                <input id="dtnasc" type="date" class="form-control" name="dtNasc">

                            </div>
                            </div>

                            <label for="phone" class="col-md-4 control-label">Telefone</label>

                             <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="telefone">
                                  </div>
                                 </div>

                            <div class="form-group">
                            <label for="pais" class="col-md-4 control-label">País</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control" name="pais">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="cidade" class="col-md-4 control-label">Cidade.</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control" name="cidade">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control" name="estado">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="rua" class="col-md-4 control-label">Rua</label>

                            <div class="col-md-6">
                                <input id="rua" type="text" class="form-control" name="rua">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">Numero</label>

                            <div class="col-md-6">
                                <input id="numero" type="number" class="form-control" name="numero">

                            </div>
                            </div>

                            <div class="form-group">
                            <label for="cep" class="col-md-4 control-label">CEP</label>

                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control" name="cep">

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
