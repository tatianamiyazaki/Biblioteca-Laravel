<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Emprestimo;

use App\Livro;

use App\Cliente;

use DB;
class EmprestimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $emprestimos = Emprestimo::all();
        return view('emprestimos.index', compact('emprestimos'));
        /*$livros = DB::table('emprestimos')
            ->join('livros', 'emprestimos.codLivro', '=', 'livros.id')
            ->select('livros.titulo')
            ->get();


        $clientes = DB::table('emprestimos')
                ->join('clientes', function ($join) {
                $join->on('emprestimos.codCliente', '=', 'clientes.id')
                ->where('emprestimos.id', '=', '$empretimos->id');
        })
        ->select('clientes.nomeCliente')
        ->get();
        
        $clientes = DB::table('emprestimos')
            ->join ('clientes', 'emprestimos.codCliente', '=', 'clientes.id')
            ->select('clientes.nomeCliente')
            ->get();*/

            
        //return view ('emprestimos.index', ['emprestimos'=>$emprestimos], ['clientes'=>$clientes]);           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
        $livros = Livro::select('titulo', 'id')->pluck('titulo', 'id')->prepend('Selecione um livro', '')->toArray();
        $clientes = Cliente::select('nomeCliente','id')->pluck('nomeCliente','id')->prepend('Selecione um cliente', '')->toArray();
        return view('emprestimos.create',['livros'=> $livros], ['clientes'=> $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emprestimos = new Emprestimo();
        $emprestimos-> codCliente = $request-> codCliente;
        $emprestimos-> codLivro = $request-> codLivro;
        $emprestimos-> status = $request-> status;
        $emprestimos-> save();
        return redirect()->route('emprestimos.index');
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
        
        $emprestimos=Emprestimo::findOrFail($id);
        return view('emprestimos.edit', compact('emprestimos'));
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
        $emprestimos=Emprestimo::findOrFail($id);
        $emprestimos-> codCliente = $request-> codCliente;
        $emprestimos-> codLivro = $request-> codLivro;
        $emprestimos-> status = $request-> status;
        $emprestimos-> save();
        return redirect()->route('emprestimos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emprestimo = Emprestimo::findOrFail($id);
        $emprestimo->delete();
        return redirect()->route('emprestimos.index');
    }
}
