<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <link href="{{ asset('fonts/glyphicons-halflings-regular.ttf') }}">
    <link href="{{ asset('fonts/glyphicons-halflings-regular.woff') }}">
    <link href="{{ asset('fonts/glyphicons-halflings-regular.woff2') }}">

    <!-- Styles -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-dropdownhover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Oráculo
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
            @if(Auth::check())
                    <li><a href="{{ url('/home') }}">Home</a></li>
            @endif

            {{--Se o usuário estiver logado, renderiza isso na barra--}}
            @if(Auth::check())
                    <li class="dropdown">
                        <a class="dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Cadastro<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Equipamentos</a></li>
                            <li><a href="#">Componentes</a></li>
                            <li><a href="#">Peças</a></li>
                            <li><a href="#">Materiais</a></li>
                            <li><a href="/register-prof">Profissionais</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Entrada de Dados<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Registro de Eventos</a></li>
                            <li><a href="#">Registro de Vistoria</a></li>
                            <li class="dropdown"><a href="#">Registro de Parâmetros<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Manual</a></li>
                                    <li><a href="#">Automático</a></li>
                                    <li><a href="#">Importado</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Planejamento da Manutenção</a></li>
                            <li><a href="#">Registro de O.S</a></li>
                            <li><a href="#">Alocação de Pessoas</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Relatórios<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Histórico do Equipamento</a></li>
                            <li><a href="#">Inventários</a></li>
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Ordens do Serviço</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">Dashboard<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Parâmetros Monitorados</a></li>
                            <li><a href="#">Status das Equipes</a></li>
                            <li><a href="#">Status dos Equipamentos</a></li>
                        </ul>
                    </li>
                    {{--<li>--}}
                        {{--<a href="#" class="" data-toggle="collapse" data-target="#demo">Cadastro<span class="caret"></span></a>--}}
                        {{--<ul class="collapse unstyled" id="demo">--}}
                            {{--<li><a href="#">Equipamentos</a></li>--}}
                            {{--<li><a href="#">Componentes</a></li>--}}
                            {{--<li><a href="#">Peças</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="">Entrada de Dados</a></li>--}}
                    {{--<li><a href="">Relatórios</a></li>--}}
                    {{--<li><a href="">Dashboard</a></li>--}}
                    {{--<li><a href="">Sistema</a></li>--}}
            @endif

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{Session('nome')}}


                         <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>



@yield('content')

<!-- JavaScripts -->
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
<script src="{{ URL::asset('js/jquery.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/custom.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-dropdownhover.js') }}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
