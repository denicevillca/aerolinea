@extends('layouts.app')

@section('content')
<div class="container">
	
	<h1>EDITAR VUELO</h1>

<form action="{{url('/vuelo/'.$vuelos->id)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
{{method_field('PATCH')}}


<div class="form-group">

<label for="capacidad" class="control-label">{{'Capacidad'}}</label>

<input type="text" class="form-control" name="capacidad" id="capacidad" value="{{$vuelos->capacidad}}">
</div>


<div class="form-group">
	
	<label for="numero_vuelo"  class="control-label">{{'Numero Vuelo'}}</label>
<input type="text" class="form-control"  name="numero_vuelo" id="numero_vuelo" value="{{$vuelos->numero_vuelo}}">
</div>

<input type="submit" class="btn btn-primary btn-block"  value="EDITAR">
 <a href="{{url('vuelo')}}">regresar</a>

</form>
</div>
@endsection

