@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Vendas</h1>

<div class="card" style="width: 18rem;">
    <img src="{{@asset('')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$venda->nome}}</h5>
    </div>
  </div>

@endsection
