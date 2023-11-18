@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Minhas compras</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($compras as $compra)

<div class="card  mx-3" style="width: 18rem;">
    <img src="{{Voyager::image($compra->itemLeilao->material->foto)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$compra->itemLeilao->material->nome}} - {{$compra->itemLeilao->material->marca}} </h3>
      <p class="card-text">
     Quantidade:  {{$compra->itemLeilao->quantidade}} <br>
     Preço: R$ {{$compra->valor}} <br>
     Fornecedor:  {{$compra->fornecedor->name}} <br>
     Prazo de entrega:  {{$compra->prazo_entrega}} <br>
       {!!$compra->observacao!!}
     </p>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhuma compra efetuada</p>
@endforelse
</section>

@endsection
