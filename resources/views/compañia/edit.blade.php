@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>EDITAR</h1>

<form action="{{url('/corporacion/'.$cor->id)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
{{method_field('PATCH')}}


<div class="form-group">

<label for="nombre" class="control-label">{{'nombre'}}</label>

<input type="text" class="form-control" name="nombre" id="nombre" value="{{$cor->nombre}}">
</div>


<div class="form-group">
	
	<label for="direccion"  class="control-label">{{'Direccion'}}</label>
<input type="text" class="form-control"  name="direccion" id="edad" value="{{$cor->direccion}}">
</div>


<div class="form-group">
<label for="telefono"   class="control-label" >{{'Telefono'}}</label>
<input type="text" class="form-control"  name="telefono" id="telefono" value="{{$cor->telefono}}">
</div>

<input type="submit" class="btn btn-primary btn-block"  value="EDITAR">
 <a href="{{url('corporacion')}}">regresar</a>

</form>
</div>
@endsection

