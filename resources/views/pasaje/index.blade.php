@extends('layouts.app')

	@section('content')

<div class="container">
   <a href="{{url('pasaje/create')}}" class="btn btn-success">Agregar_Boleto</a>

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
      <th scope="col">Clase</th>
      <th scope="col">Asiento</th>
      <th scope="col">Costo</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($pasaje as $pasajes)
    <tr>
     
      <th scope="row">{{$pasajes->id}}</th>

      <td>{{$pasajes->clase}}</td>
      <td>{{$pasajes->asiento}}</td>
      <td>{{$pasajes->costo}}</td>

      
      <td>
      	<a class="btn btn-info" href="{{url('/pasaje/'.$pasajes->id.'/edit')}}">EDITAR</a>

      	<form method="post" action="{{url('/pasaje/'.$pasajes->id)}}" style="display:inline">

      	{{csrf_field()}}
      		{{method_field('DELETE')}}

      	<button class="btn btn-danger"type="submit" onclick="return confirm('¿borrar?');"> borrar</button>
      	</form>

      </td>
            
    </tr>
    @endforeach
</tbody>
</table>
{{ $pasaje->links()}}
    </div>
@endsection

	



