@extends('layouts.app')

	@section('content')

<div class="container">
   <a href="{{url('vuelo/create')}}" class="btn btn-success">Agregar_Vuelo</a>

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
      <th scope="col">Capacidad</th>
      <th scope="col">numero_vuelo</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($vuelo as $vuelos)
    <tr>
     
      <th scope="row">{{$vuelos->id}}</th>

      <td>{{$vuelos->capacidad}}</td>
      <td>{{$vuelos->numero_vuelo}}</td>
      
      <td>
      	<a class="btn btn-info" href="{{url('/vuelo/'.$vuelos->id.'/edit')}}">EDITAR</a>

      	<form method="post" action="{{url('/vuelo/'.$vuelos->id)}}" style="display:inline">

      	{{csrf_field()}}
      		{{method_field('DELETE')}}

      	<button class="btn btn-danger"type="submit" onclick="return confirm('¿borrar?');"> borrar</button>
      	</form>

      </td>
            
    </tr>
    @endforeach
</tbody>
</table>
{{ $vuelo->links()}}
    </div>
@endsection

	



