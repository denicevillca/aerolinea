@extends('layouts.app')


@section('content')
<h4>crear:</h4>
<form action="{{url('cliente')}}" method="post">
	{{csrf_field()}}

<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="">
<label for="edad">{{'Edad'}}</label>
<input type="text" name="edad" id="edad" value="">
<label for="telefono">{{'Telefono'}}</label>
<input type="text" name="telefono" id="telefono" value="">
<label for="dni">{{'DNI'}}</label>
<input type="text" name="dni" id="dni" value="">

<input type="submit" value="agregar">
 <a href="{{url('cliente')}}">Regresar</a>
</form>
@endsection
