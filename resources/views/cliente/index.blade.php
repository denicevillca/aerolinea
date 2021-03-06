@extends('layouts.app')

	@section('content')

<div class="container">
   <a href="{{url('cliente/create')}}" class="btn btn-success">Agregar_cliente</a>

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
      <th scope="col">Edad</th>
      <th scope="col">Telefono</th>
      <th scope="col">DNI</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($cliente as $clientes)
    <tr>
     
      <th scope="row">{{$clientes->id}}</th>

      <td>{{$clientes->nombre}}</td>
      <td>{{$clientes->edad}}</td>
      <td>{{$clientes->telefono}}</td>
      <td>{{$clientes->dni}}</td>
      
      <td>
      	<a class="btn btn-info" href="{{url('/cliente/'.$clientes->id.'/edit')}}">EDITAR</a>

      	<form method="post" action="{{url('/cliente/'.$clientes->id)}}" style="display:inline">

      	{{csrf_field()}}
      		{{method_field('DELETE')}}

      	<button class="btn btn-danger"type="submit" onclick="return confirm('¿borrar?');"> borrar</button>
      	</form>

      </td>
            
    </tr>
    @endforeach
</tbody>
</table>
{{ $cliente->links()}}
    </div>
@endsection

	



