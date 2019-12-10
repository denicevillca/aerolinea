
@extends('layouts.app')

@section('content')

<div class="container">
	<h4>crear:</h4>
<form action="{{url('pasaje')}}" clas="form-horizontal" method="post">
	{{csrf_field()}}

<div class="form-group">
<label for="clase" class="control-label">{{'clase'}}</label>
<input type="text" class="form-control"name="clase" id="clase" value="">
</div>

<div class="form-group">
	<label for="asiento" class="control-label">{{'Asiento'}}</label>
<input type="text" class="form-control" name="asiento" id="asiento" value="">

</div>


<div class="form-group">
	<label for="costo" class="control-label">{{'Costo'}}</label>
<input type="text" class="form-control" name="costo" id="costo" value="">

</div>

<input type="submit" class="btn btn-success btn-block" value="agregar">
 <a href="{{url('cliente')}}">Regresar</a>
</form>

	
</div>
@endsection
