@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>EDITAR</h1>

<form action="{{url('/cliente/'.$clientes->id)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
{{method_field('PATCH')}}


<div class="form-group">

<label for="nombre" class="control-label">{{'nombre'}}</label>

<input type="text" class="form-control" name="nombre" id="nombre" value="{{$clientes->nombre}}">
</div>


<div class="form-group">
	
	<label for="edad"  class="control-label">{{'Edad'}}</label>
<input type="text" class="form-control"  name="edad" id="edad" value="{{$clientes->edad}}">
</div>


<div class="form-group">
<label for="telefono"   class="control-label" >{{'Telefono'}}</label>
<input type="text" class="form-control"  name="telefono" id="telefono" value="{{$clientes->telefono}}">
</div>

<div class="form-group">
	<label for="dni"   class="control-label">{{'DNI'}}</label>
<input type="text" class="form-control"  name="dni" id="dni" value="{{$clientes->dni}}">
</div>





<input type="submit" class="btn btn-primary btn-block"  value="EDITAR">
 <a href="{{url('cliente')}}">regresar</a>

</form>
</div>
@endsection

