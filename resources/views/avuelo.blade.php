@extends('layouts.app')

@section('content')
<div class="container ">

<h1  >VUELOS</h1>	
</div>

<div class="container">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id_vuelo</th>
      <th scope="col">capacidad</th>
      <th scope="col">num_vuelo</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($vuelo as $item2)
      <th scope="row">{{$item2->id_vuelo}}</th>
      <td>{{$item2->capacidad}}</td>
      <td>{{$item2->numero_vuelo}}</td>
      <td>@mdo</td>
      @endforeach
    </tr>
    
  </tbody>
</table>

</div>
@endsection

