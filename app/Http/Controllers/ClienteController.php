<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use App\Models\producto;



class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::all();
        return view('clientes.clientes',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.clientenv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cliente = new cliente;

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
        $cliente->usuario = $request->usuario;
        $cliente->fecha_nacimiento = $request ->fecha_nacimiento;
        $cliente->save();

        $clientes = cliente::all();
        return view('clientes.clientes',compact('clientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        return view('clientes.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cliente = cliente::find($request->id_cliente);

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->email = $request->email;
        $cliente->usuario = $request->usuario;
        $cliente->fecha_nacimiento = $request ->fecha_nacimiento;
        $cliente->save();

        $clientes = cliente::all();
        return view('clientes.clientes',compact('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(cliente $cliente)
    {
        return view('clientes.delete',compact('cliente'));
    }

    
    public function destroy(Request $request)
    {
       
        $cliente = cliente::find($request->id_cliente);
        $cliente->delete();

        $clientes = cliente::all();
        return view('clientes.clientes',compact('clientes'));
    }
}
