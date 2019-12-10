
@extends('layouts.app')

@section('content')

<div class="container">
	<h4>crear:</h4>
<form action="{{url('vuelo')}}" clas="form-horizontal" method="post">
	{{csrf_field()}}

<div class="form-group">

<label for="capacidad" class="control-label">{{'Capacidad'}}</label>

<input type="text" class="form-control" name="capacidad" id="capacidad" value="">
</div>


<div class="form-group">
	
	<label for="numero_vuelo"  class="control-label">{{'Numero Vuelo'}}</label>
<input type="text" class="form-control"  name="numero_vuelo" id="numero_vuelo" value="">
</div>


<input type="submit" class="btn btn-success btn-block" value="agregar">
 <a href="{{url('cliente')}}">Regresar</a>
</form>

	
</div>
@endsection
