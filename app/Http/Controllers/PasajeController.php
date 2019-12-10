<?php

namespace App\Http\Controllers;

use App\Pasaje;
use Illuminate\Http\Request;

class PasajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pasaje']=Pasaje::paginate(4);
        return view('pasaje.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasaje.create');
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
      
        //
         $datosPasaje=request()->except('_token');
            Pasaje::insert($datosPasaje);
            return redirect('pasaje')->with('Mensaje','Pasaje incorporado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function show(Pasaje $pasaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $pasajes=Pasaje::findOrFail($id);

        return view('pasaje.edit',compact('pasajes'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
         $datosPasaje=request()->except(['_token','_method']);
        Pasaje::where('id','=',$id)->update($datosPasaje);

        $pasajes=Pasaje::findOrFail($id);

        
 return redirect('pasaje')->with('Mensaje','Pasajes actualizados');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasaje  $pasaje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          Pasaje::destroy($id);

        //return redirect('cliente');
         return redirect('pasaje')->with('Mensaje','pasaje Borrado');
    
    }
}
