@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Material</h1>

<div class="card" style="width: 18rem;">
    <img src="{{@asset('assets/images/exemplos/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$material->nome}}</h5>
      <p class="card-text">{!!$material->marca!!}</p>
    </div>
  </div>

@endsection
