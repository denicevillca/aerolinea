<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['cliente']=Cliente::paginate(4);
        return view('cliente.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosCliente=request()->except('_token');
            Cliente::insert($datosCliente);
            return redirect('cliente')->with('Mensaje','Cliente agregado');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clientes=Cliente::findOrFail($id);

        return view('cliente.edit',compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosCliente=request()->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($datosCliente);

        $clientes=Cliente::findOrFail($id);

        
 return redirect('cliente')->with('Mensaje','Cliente ACTUALIZADO');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cliente::destroy($id);

        //return redirect('cliente');
         return redirect('cliente')->with('Mensaje','Cliente Borrado');
    
    }
}
