@extends('layouts.app')

	@section('content')
    <a href="{{url('cliente/create')}}">Nuevo_cliente</a>

<div class="container">
     <table class="table">	
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
      	<a href="{{url('/cliente/'.$clientes->id.'/edit')}}">EDITAR</a>

      	<form method="post" action="{{url('/cliente/'.$clientes->id)}}">
      	{{csrf_field()}}
      		{{method_field('DELETE')}}

      	<button type="submit" onclick="return confirm('¿borrar?');"> borrar</button>
      	</form>

      </td>
            
    </tr>
    @endforeach
</tbody>
</table>
    </div>
@endsection

	



