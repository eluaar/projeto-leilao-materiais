@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Lances</h1>

<div class="card" style="width: 18rem;">
    <img src="{{@asset('assets/images/exemplos/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$lance->nome}}</h5>
      <p class="card-text">{!!$lance->tempo!!}</p>
      <p>{{$lance?->tempo?->name}}</p>
    </div>
  </div>

@endsection
