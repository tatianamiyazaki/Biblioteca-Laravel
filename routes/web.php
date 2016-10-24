<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//página inicial (antes do login)
Route::get('/', function () {
    return view('welcome');
});

//autenticação
Auth::routes();

//vai à página inicial
Route::get('/home', 'HomeController@index');

//vai à página de cadastro de novo cliente
Route::get('/cliente', 'ClienteController@create');

//vai à página de pesquisa de clientes (mostra clientes cadastrados)
Route::resource('clientes', 'ClienteController');

//vai à página de pesquisa de livros (mostra livros cadastrados)
Route::resource('livros', 'LivroController');

//vai à página de cadastro de novo livro
Route::get('/livro', 'LivroController@create');


