
@extends('layouts.app')

@section('content')

<div class="container">
	<h4>crear:</h4>
<form action="{{url('cliente')}}" clas="form-horizontal" method="post">
	{{csrf_field()}}

<div class="form-group">
<label for="nombre" class="control-label">{{'nombre'}}</label>
<input type="text" class="form-control"name="nombre" id="nombre" value="">
</div>

<div class="form-group">
	<label for="edad" class="control-label">{{'Edad'}}</label>
<input type="text" class="form-control" name="edad" id="edad" value="">

</div>


<div class="form-group">
	<label for="telefono" class="control-label">{{'Telefono'}}</label>
<input type="text" class="form-control" name="telefono" id="telefono" value="">

</div>

<div class="form-group">
	<label for="dni" class="control-label">{{'DNI'}}</label>
<input type="text"  class="form-control"name="dni" id="dni" value="">

</div>


<input type="submit" class="btn btn-success btn-block" value="agregar">
 <a href="{{url('cliente')}}">Regresar</a>
</form>

	
</div>
@endsection
