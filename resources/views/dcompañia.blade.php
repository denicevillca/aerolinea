@extends('layouts.app')


@section('content')
<div class="container ">

<h1>COMPAÑIA</h1> 
</div>
<div class="container">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id_compañia</th>
      <th scope="col">nombre</th>
      <th scope="col">direccion</th>
      <th scope="col">telefono</th>
         </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($compañia as $item1)
      <th scope="row">{{$item1->id_com}}</th>
      <td>{{$item1->nombre}}</td>
      <td>{{$item1->direccion}}</td>
      <td>{{$item1->telefono}}</td>
      <td>@mdo</td>
            @endforeach
    </tr>
   
  </tbody>
</table>

</div>
@endsection
