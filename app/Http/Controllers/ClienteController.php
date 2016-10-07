<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::all();
        return view('indexcliente', compact('cliente'));
    }

    public function create()
    {
        return view('createcliente');
    }
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

    public function show($id)
    {
        //
    }

    public function editcliente($id)
    {
        $cliente=Cliente::findOrFail($id);
        return view('editcliente', compact('cliente'));
    }

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

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('home.cliente');
    }
}
