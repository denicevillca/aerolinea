@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>EDITAR</h1>

<form action="{{url('/pasaje/'.$pasajes->id)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
{{method_field('PATCH')}}


<div class="form-group">
<label for="clase" class="control-label">{{'clase'}}</label>
<input type="text" class="form-control"name="clase" id="clase" value="{{$pasajes->clase}}">
</div>

<div class="form-group">
	<label for="asiento" class="control-label">{{'Asiento'}}</label>
<input type="text" class="form-control" name="asiento" id="asiento" value="{{$pasajes->asiento}}">

</div>


<div class="form-group">
	<label for="costo" class="control-label">{{'Costo'}}</label>
<input type="text" class="form-control" name="costo" id="costo" value="{{$pasajes->costo}}">

</div>




<input type="submit" class="btn btn-primary btn-block"  value="EDITAR">
 <a href="{{url('cliente')}}">regresar</a>

</form>
</div>
@endsection

