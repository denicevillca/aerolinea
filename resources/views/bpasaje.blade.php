@extends('layouts.app')


@section('content')
<div class="container ">

<h1  >PASAJE</h1>	
</div>
<div class="container">
          <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id_pasaje</th>
      <th scope="col">clase</th>
      <th scope="col">asiento</th>
      <th scope="col">valor</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($pasaje as $item3)
      <th scope="row">{{$item3->id_pasaje}}</th>
      <td>{{$item3->clase}}</td>
      <td>{{$item3->asiento}}</td>
      <td>{{$item3->valor}}</td>
      <td>@mdo</td>
    @endforeach
    </tr>
    
  </tbody>
</table>

</div>
@endsection
