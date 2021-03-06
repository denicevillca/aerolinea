<?php

namespace App\Http\Controllers;

use App\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['vuelo']=Vuelo::paginate(4);
        return view('vuelo.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('vuelo.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $datosVuelo=request()->except('_token');
            Vuelo::insert($datosVuelo);
            return redirect('vuelo')->with('Mensaje','VUELO incorporado');
   //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function show(Vuelo $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vuelos=Vuelo::findOrFail($id);

        return view('vuelo.edit',compact('vuelos'));
 //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $datosVuelo=request()->except(['_token','_method']);
        Vuelo::where('id','=',$id)->update($datosVuelo);

        $vuelos=Vuelo::findOrFail($id);

        
 return redirect('vuelo')->with('Mensaje','VUELOS actualizados');
    
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
         Vuelo::destroy($id);

        //return redirect('cliente');
         return redirect('vuelo')->with('Mensaje','DATO DE VUELO Borrado');
    
        //
    }
}
