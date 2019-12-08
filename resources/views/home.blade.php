@extends('layouts.app')

@section('content')
@section('seccion')
<h1>CLIENTE</h1>
@endsection

<div class="container">
   <div class="container">
    @yield('seccion')
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">
          
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
            </div>
        </div>
    </div>
</div>
  <div class="container">
              <a href="{{route('home')}}" class="btn btn-info">CLIENTE</a>
        <a href="{{route('pasaje')}}" class="btn btn-info">PASAJE</a>
        <a href="{{route('vuelo')}}" class="btn btn-info">VUELO</a>
        <a href="{{route('compañia') }}" class="btn btn-info">COMPAÑIA</a>
          <a href="{{route('contacto') }}" class="btn btn-info ">CONTACTO</a>

</div>
@endsection
