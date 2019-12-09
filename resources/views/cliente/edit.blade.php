<h1>EDITAR</h1>
<form action="{{url('/cliente/'.$clientes->id)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
{{method_field('PATCH')}}

<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{$clientes->nombre}}">

<label for="edad">{{'Edad'}}</label>
<input type="text" name="edad" id="edad" value="{{$clientes->edad}}">
<label for="telefono">{{'Telefono'}}</label>
<input type="text" name="telefono" id="telefono" value="{{$clientes->telefono}}">
<label for="dni">{{'DNI'}}</label>
<input type="text" name="dni" id="dni" value="{{$clientes->dni}}">
<input type="submit" value="EDITAR">
 <a href="{{url('cliente')}}">regresar</a>

</form>