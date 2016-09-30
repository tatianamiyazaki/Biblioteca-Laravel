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
            <legend align="center"><b>CADASTRO DE CLIENTE</b></legend>

            <!-- Input nome do cliente-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nomeCliente">Nome</label>  
              <div class="col-md-4">
              <input id="nomeCliente" name="nomeCliente" type="text" placeholder="nome" class="form-control input-md">
              </div>
            </div>

            <!-- Input telefone fixo-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telFixo">Telefone fixo</label>  
              <div class="col-md-4">
              <input id="telFixo" name="telFixo" type="text" placeholder="telefone fixo" class="form-control input-md">
              </div>
            </div>

            <!-- Input telefone celular-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telCelular">Telefone Celular</label>  
              <div class="col-md-4">
              <input id="telCelular" name="telCelular" type="text" placeholder="telefone celular" class="form-control input-md">
              </div>
            </div>

            <!-- Input Endereço-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="rua">Endereço</label>  
              <div class="col-md-4">
              <input id="rua" name="rua" type="text" placeholder="endereço" class="form-control input-md">
              </div>
            </div>

            <!-- Input Número-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="numero">Número</label>  
              <div class="col-md-4">
              <input id="numero" name="numero" type="text" placeholder="número" class="form-control input-md">
              </div>
            </div>

            <!-- Input Complemento-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="complemento">Complemento</label>  
              <div class="col-md-4">
              <input id="complemento" name="bairro" type="text" placeholder="complemento" class="form-control input-md">
              </div>
            </div>


            <!-- Input Bairro-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="bairro">Bairro</label>  
              <div class="col-md-4">
              <input id="bairro" name="bairro" type="text" placeholder="bairro" class="form-control input-md">
              </div>
            </div>

            <!-- Input Cidade-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cidade">Cidade</label>  
              <div class="col-md-4">
              <input id="cidade" name="cidade" type="text" placeholder="cidade" class="form-control input-md">
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="uf">UF</label>
              <div class="col-md-4">
                <select id="uf" name="uf" class="form-control">
                  <option value="">Acre (AC)</option>
                  <option value="">Alagoas (AL)</option>
                  <option value="">Amapá (AP)</option>
                  <option value="">Amazonas (AM)</option>
                  <option value="">Bahia (BA)</option>
                  <option value="">Ceará (CE)</option>
                  <option value="">Distrito Federal (DF)</option>
                  <option value="">Espírito Santo (ES)</option>
                  <option value="">Goiás (GO)</option>
                  <option value="">Maranhão (MA)</option>
                  <option value="">Mato Grosso (MT)</option>
                  <option value="">Mato Grosso do Sul (MS)</option>
                  <option value="">Minas Gerais (MG)</option>
                  <option value="">Pará (PA)</option>
                  <option value="">Paraíba (PB)</option>
                  <option value="">Paraná (PR)</option>
                  <option value="">Pernambuco (PE)</option>
                  <option value="">Piauí (PI)</option>
                  <option value="">Rio de Janeiro (RJ)</option>
                  <option value="">Rio Grande do Norte (RN)</option>
                  <option value="">Rio Grande do Sul (RS)</option>
                  <option value="">Rondônia (RO)</option>
                  <option value="">Roraima (RR)</option>
                  <option value="">Santa Catarina (SC)</option>
                  <option value="">São Paulo (SP)</option>
                  <option value="">Sergipe (SE)</option>
                  <option value="">Tocantins (TO)</option>
                </select>
              </div>
            </div>

            <!-- Button cadastrar --> 
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="btnCadastrar" name="btnCadastrar" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>


            


            





        </fieldset>
    </form>


    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>