<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }


    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes-> nomeCliente = $request-> nomeCliente;
        $clientes-> telFixo = $request-> telFixo;
        $clientes-> telCelular = $request-> telCelular;
        $clientes-> email = $request-> email;
        $clientes-> numero = $request-> numero;
        $clientes-> cidade = $request-> cidade;
        $clientes-> uf = $request-> uf;
        $clientes-> rua = $request-> rua;
        $clientes-> complemento = $request-> complemento;
        $clientes-> save();
        return redirect()->route('clientes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        return view('clientes.edit', compact('clientes'));
    }

    public function update(Request $request, $codCliente)
    {
        $clientes=Cliente::findOrFail($id);
        $clientes-> nomeCliente = $request-> nomeCliente;
        $clientes-> telFixo = $request-> telFixo;
        $clientes-> telCelular = $request-> telCelular;
        $clientes-> email = $request-> email;
        $clientes-> numero = $request-> numero;
        $clientes-> cidade = $request-> cidade;
        $clientes-> uf = $request-> uf;
        $clientes-> rua = $request-> rua;
        $clientes-> complemento = $request-> complemento;
        $clientes-> save();
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
