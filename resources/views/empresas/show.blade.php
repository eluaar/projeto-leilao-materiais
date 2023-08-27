@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Empresa</h1>

<div class="card" style="width: 18rem;">
    <img src="{{@asset('assets/images/exemplos/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$empresa->nome}}</h5>
      <p class="card-text">{{$empresa->cnpj}}</p>
    </div>
  </div>

@endsection
