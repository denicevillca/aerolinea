<?php

namespace App\Http\Controllers;

use App\corporacion;
use Illuminate\Http\Request;

class CorporacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['corporacion']=Corporacion::Paginate(4);
        return view('compañia.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('compañia.create');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCorporacion=request()->except('_token');
        Corporacion::insert($datosCorporacion);
        return redirect('corporacion')->with('Mensaje','Compañia agregada con exito');


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\corporacion  $corporacion
     * @return \Illuminate\Http\Response
     */
    public function show(corporacion $corporacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\corporacion  $corporacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $cor=Corporacion::findOrFail($id);

        return view('compañia.edit',compact('cor'));
 //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\corporacion  $corporacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $datosCorporacion=request()->except(['_token','_method']);
        Corporacion::where('id','=',$id)->update($datosCorporacion);

        $cor=Corporacion::findOrFail($id);

        
 return redirect('corporacion')->with('Mensaje','Compañia ACTUALIZADO');
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\corporacion  $corporacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Corporacion::destroy($id);

        //return redirect('cliente');
         return redirect('corporacion')->with('Mensaje',' Borrado exitoso');//
    }
}
