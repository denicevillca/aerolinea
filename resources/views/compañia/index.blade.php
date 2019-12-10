@extends('layouts.app')

	@section('content')

<div class="container">
<h1> si se pudo?</h1>
</div>

<div class="container">
   <a href="{{url('corporacion/create')}}" class="btn btn-success">Agregar_compañia</a>

</div>
   <br>
@if(Session::has('Mensaje'))
<div class="alert alert-success">
  {{Session::get('Mensaje')}}
</div>
  
@endif

<div class="container">
     <table class="table table-hover" >	
<thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($corporacion as $cor)
    <tr>
     
      <th scope="row">{{$cor->id}}</th>

      <td>{{$cor->nombre}}</td>
      <td>{{$cor->direccion}}</td>
      <td>{{$cor->telefono}}</td>
      <td>
      	<a class="btn btn-info" href="{{url('/corporacion/'.$cor->id.'/edit')}}">EDITAR</a>

      	<form method="post" action="{{url('/corporacion/'.$cor->id)}}" style="display:inline">

      	{{csrf_field()}}
      		{{method_field('DELETE')}}

      	<button class="btn btn-danger"type="submit" onclick="return confirm('¿borrar?');"> borrar</button>
      	</form>

      </td>
            
    </tr>
    @endforeach
</tbody>
</table>
{{ $corporacion->links()}}
    </div>



@endsection

	



