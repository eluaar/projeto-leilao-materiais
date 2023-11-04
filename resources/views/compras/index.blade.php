@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Minhas compras</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($compras as $compra)

<div class="card  mx-3" style="width: 18rem;">
    <img src="{{@asset('')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$compra->nome}}</h5>
      <p class="card-text">{!!$compra->descricao!!}</p>
      <p>{{$compra?->comprador?->name}}</p>
      <a href="{{route('compras.show', ['id'=>$compra->id])}}" >
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhuma compra efetuada</p>
@endforelse
</section>

@endsection
