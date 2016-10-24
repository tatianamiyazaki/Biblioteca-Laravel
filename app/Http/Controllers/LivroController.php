<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livros = new Livro();
        $livros-> titulo = $request-> titulo;
        $livros-> subtitulo = $request-> subtitulo;
        $livros-> autor = $request-> autor;
        $livros-> edicao = $request-> edicao;
        $livros-> editora = $request-> editora;
        $livros-> ano = $request-> ano;
        $livros-> exemplares = $request-> exemplares;        
        $livros-> save();
        return redirect()->route('livros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livros=Livro::findOrFail($id);
        return view('livros.edit', compact('livros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livros=Livro::findOrFail($id);
        $livros-> titulo = $request-> titulo;
        $livros-> subtitulo = $request-> subtitulo;
        $livros-> autor = $request-> autor;
        $livros-> edicao = $request-> edicao;
        $livros-> editora = $request-> editora;
        $livros-> ano = $request-> ano;
        $livros-> exemplares = $request-> exemplares;        
        $livros-> save();
        return redirect()->route('livros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return redirect()->route('livros.index');
    }
}
