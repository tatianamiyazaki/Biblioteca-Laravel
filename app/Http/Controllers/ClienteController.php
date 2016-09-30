<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::all();
        return view('indexcliente', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente->nomeCliente = $request->nomeCliente;
        $cliente->telFixo = $request->telFixo;
        $cliente->telCelular = $request->telCelular;
        $cliente->numero = $request->numero;
        $cliente->cidade = $request->cidade;
        $cliente->rua = $request->rua;
        $cliente->bairro = $request->bairro;
        $cliente->uf = $request->uf;
        $cliente->complemento = $request->complemento;
        $cliente->save();
        return redirect()->route('home.cliente');
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
    public function editcliente($id)
    {
        $cliente=Cliente::findOrFail($id);
        return view('editcliente', compact('cliente'));
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
        $cliente = Cliente::findOrFail($id);
        $cliente->nomeCliente = $request->nomeCliente;
        $cliente->telFixo = $request->telFixo;
        $cliente->telCelular = $request->telCelular;
        $cliente->numero = $request->numero;
        $cliente->cidade = $request->cidade;
        $cliente->rua = $request->rua;
        $cliente->bairro = $request->bairro;
        $cliente->uf = $request->uf;
        $cliente->complemento = $request->complemento;
        $cliente->save();
        return redirect()->route('home.cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('home.cliente');
    }
}
