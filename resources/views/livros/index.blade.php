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
                    <!--menu cadastos e emprésimos-->                        
                        <ul class="nav nav-pills"> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/home">Home</a>  
                                </div>
                            </li>  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultas<span class="caret"></span></a> 
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="clientes">Clientes</a><br>
                                    <a class="dropdown-item" href="livros">Livros</a><br>
                                    <a class="dropdown-item" href="emprestimos">Empréstimos</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cadastros<span class="caret"></span></a> 
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/cliente">Cliente</a><br>
                                    <a class="dropdown-item" href="/livro">Livro</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empréstimos<span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/emprestimo">Retirar</a><br>
                                    <a class="dropdown-item" href="emprestimos">Devolver</a>
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
    <legend align="center"><b>NOSSOS LIVROS</b></legend>
    <table class="table table-striped">
	<thead>
		<tr>
            <th>ID</th>
			<th>Título</th>
			<th>Subtítulo</th>
			<th>Autor</th>
			<th>Edição</th>
            <th>Editora</th>
			<th>Ano</th>
            <th>Exemplares</th>
            <th>Status</th>
            <th>Ação</th>
		</tr>
	</thead>
	<tbody>
	@foreach($livros as $livros)
		<tr>
            <td>{{$livros->id}}</td>
			<td>{{$livros->titulo}}</td>
            <td>{{$livros->subtitulo}}</td>
            <td>{{$livros->autor}}</td>
            <td>{{$livros->edicao}}</td>
            <td>{{$livros->editora}}</td>
            <td>{{$livros->ano}}</td>
            <td>{{$livros->exemplares}}</td>
            <td>{{$livros->status}}</td>
			<td>
				<form method="POST" action="{{ route('livros.destroy', $livros->id) }}" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="{{ csrf_token() }}">
	              	<a href="{{ route('livros.edit', $livros->id) }}" type="submit" button type="button" class="btn btn-warning">Editar</a>
	                <input onclick="return confirm('Excluir registro?');" type="submit" button type="button" class="btn btn-danger" value="Excluir" />
	            </form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<a href="{{ route('livros.create') }}" button type="button" class="btn btn-info">Novo</a></button>
</div></div></div></div></div>
    
    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
