@extends('layouts.app')

@section('content')
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

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: white;
        padding: 0 25px;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

<div class="container">

 <div class="row">
    
      <div class="row">
        <div class="col-sm-4" >
            <h3><b<
                <p>Viajar pela leitura</p>
                <br>
                <p>Viajar pela leitura</p>
                <p>sem rumo, sem intenção.</p>
                <p>Só para viver a aventura</p>
                <p>que é ter um livro nas mãos.</p>
                <p>É uma pena que só saiba disso</p>
                <p>quem gosta de ler.</p>
                <p>Experimente!</p>
                <p>Assim sem compromisso,</p>
                <p>você vai me entender.</p>
                <p>Mergulhe de cabeça </p>
                <p>na imaginação!</p></b><br>
            </h3>
            <h5><p>Clarice Pacheco</p></h5>
        </div>
        <div class="col-sm-8"><!--inserir fotos com links para livros-->
            <br>
            <br>
            <br>
            <img src= "/livros.png">          
        </div>
                    
      </div>
    
 
  
    
@endsection
