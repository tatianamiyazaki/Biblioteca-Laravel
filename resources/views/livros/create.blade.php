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
        <fieldset>
            <!-- Formulário de cadastro de cliente -->
            <legend align="center"><b>CADASTRO DE LIVRO</b></legend>

            <!-- Input nome do Título-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nomeCliente">Título</label>  
              <div class="col-md-4">
              <input id="titulo" name="titulo" type="text" placeholder="titulo" class="form-control input-md">
              </div>
            </div>

            <!-- Input Subtítulo-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telFixo">Subtítulo</label>  
              <div class="col-md-4">
              <input id="subtitulo" name="subtitulo" type="text" placeholder="subtitulo" class="form-control input-md">
              </div>
            </div>

            <!-- Input Autor-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telCelular">Autor</label>  
              <div class="col-md-4">
              <input id="autor" name="autor" type="text" placeholder="autor" class="form-control input-md">
              </div>
            </div>

            <!-- Input Editora-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="bairro">Editora</label>  
              <div class="col-md-4">
              <input id="editora" name="editora" type="text" placeholder="editora" class="form-control input-md">
              </div>
            </div>

            <!-- Input Ano-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="rua">Ano</label>  
              <div class="col-md-4">
              <input id="ano" name="ano" type="text" placeholder="ano" class="form-control input-md">
              </div>
            </div>

            <!-- Input Edição-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="numero">Edição</label>  
              <div class="col-md-4">
              <input id="edicao" name="edicao" type="text" placeholder="edição" class="form-control input-md">
              </div>
            </div>

            <!-- Button cadastrar --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="btnCadastrar" name="btnCadastrar" class="btn btn-primary">Cadastrar</button>
                    <button id="btnCadastrar" name="btnCadastrar" class="btn btn-warning">Atualizar</button>
                    <button id="btnCadastrar" name="btnCadastrar" class="btn btn-danger">Excluir</button>          
                </div>
            </div>

          

        </fieldset>
    </form>


    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
