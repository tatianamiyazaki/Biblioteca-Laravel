<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<style>
    html, body {
        background: url('/pergaminho.jpg') no-repeat fixed center center;
        background-color: #fff;
        color: black;
        font-family: 'Cursive', serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
</style>

<!--script de máscaras para o formulário-->
<script type="text/javascript">
$(document).ready(function(){
    $("input.telFixo").mask("(99)9999-9999");
        $("input.telCelular").mask("(99)99999-9999");        
});
</script>

<body>
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
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else
                    <!--menu home, cadastos e emprésimos-->                        
                        <ul class="nav nav-pills"> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/home">Home</a>  
                                </div>
                            </li>    
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cadastros<span class="caret"></span></a> 
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/cliente">Cliente</a><br>
                                    <a class="dropdown-item" href="#">Livro/Mídia</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empréstimos<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Retirar</a><br>
                                    <a class="dropdown-item" href="#">Devolver</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <form class="form-horizontal">
        <!-- Formulário de cadastro de cliente -->
        <legend align="center"><b>CADASTRO DE CLIENTE</b></legend>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                                    <div class="table-responsive">
        <h4>NOVO CLIENTE</h4>

        {!! Form::open(['route'=>'clientes.store'])  !!}
            {!! Form::text('nome', null, ['placeholder' => 'nome']) !!}
            {!! Form::text('telFixo', null, ['placeholder' => 'telefone fixo']) !!}
            {!! Form::text('telCelular', null, ['placeholder' => 'Telefone celular']) !!}
            {!! Form::text('email', null, ['placeholder' => 'E-mail']) !!}
            {!! Form::text('rua', null, ['placeholder' => 'Rua']) !!}
            {!! Form::text('numero', null, ['placeholder' => 'Numero']) !!}
            {!! Form::text('cidade', null, ['placeholder' => 'Cidade']) !!}
            {!! Form::text('uf', null, ['placeholder' => 'UF']) !!}
            {!! Form::text('complemento', null, ['placeholder' => 'Complemento']) !!}
            {!! Form::submit('Gravar') !!}
        {!! Form::close() !!}         
        
    </form>


    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
