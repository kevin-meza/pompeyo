@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($listaPost['listaPost'] as $post)
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    {{-- {{ Auth::user()->id_user }} --}}

                        {{-- {{$post->id_post}}
                        {{$post->imagen}}
                        {{$post->descripcion}} --}}

                        {{-- <form action="{{ url ('/comentar')}}"> --}}
                    <input type="text" hidden name="id_post" id="id_post" value='{{$post->id_post}}'>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('storage').'/imagenes/'.$post->imagen}}">
                        <div class="card-body">
                          <h5 class="card-title">{{$post->name}}</h5>
                          <p class="card-text">{{$post->descripcion}}</p>
                          {{-- <input type="submit" value="aceptar"> --}}
                        {{-- </form> --}}
                        </div>
                        @foreach ($comentarios['listaComentarios'] as $comentario)
                        <div class="card">

                            <div class="card-body">

                              <h5 class="card-title">{{$comentario->name}}</h5>
                              <p class="card-text">{{$comentario->comentario}}</p>

                              {{ Auth::user()->id_user }}
                              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                          </div>

                          @endforeach

                      </div>
                      <form action="{{ url ('/comentar/store')}}" method="POST" enctype="multipart/form-data">
                </div>
                <input type="text" hidden name="id_user" value= "{{ Auth::user()->id_user}}">
                <input type="text" hidden name="id_post" id="id_post" value='{{$post->id_post}}'>
                <textarea name="comentario" id="comentario" cols="10" rows="2"></textarea>
                <input type="submit" value="Comentar">
            </form>
            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection
