@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{ Auth::user()->id_user }}
                    @foreach ($listaPost as $post)
                        {{-- {{$post->id_post}}
                        {{$post->imagen}}
                        {{$post->descripcion}} --}}

                        <form action="{{ url ('/comentar')}}">
                            <input type="text" hidden name="id_post" id="id_post" value='{{$post->id_post}}'>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('storage').'/imagenes/'.$post->imagen}}">
                        <div class="card-body">
                          <h5 class="card-title">{{$post->name}}</h5>
                          <p class="card-text">{{$post->descripcion}}</p>
                          <input type="submit" value="aceptar">
                        </form>
                        </div>
                      </div><br>
                      @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
