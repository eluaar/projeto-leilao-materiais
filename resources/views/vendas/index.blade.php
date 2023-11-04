@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Minhas compras</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($vendas as $venda)

<div class="card  mx-3" style="width: 18rem;">
    <img src="{{@asset('')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$venda->nome}}</h5>
      <p class="card-text">{!!$venda->descricao!!}</p>
      <p>{{$venda?->comprador?->name}}</p>
      <a href="{{route('vendas.show', ['id'=>$venda->id])}}" >
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhuma venda efetuada</p>
@endforelse
</section>

@endsection
