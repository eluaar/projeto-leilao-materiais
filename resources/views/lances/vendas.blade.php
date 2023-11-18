@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Minhas vendas</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($vendas as $venda)

<div class="card  mx-3" style="width: 18rem;">
    <img src="{{Voyager::image($venda->itemLeilao->material->foto)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$venda->itemLeilao->material->nome}} - {{$venda->itemLeilao->material->marca}} </h3>
      <p class="card-text">
     Quantidade:  {{$venda->itemLeilao->quantidade}} <br>
     Preço: R$ {{$venda->valor}} <br>
     Comprador:  {{$venda->itemLeilao->leilao->comprador->name}} <br>
     Prazo de entrega:  {{$venda->prazo_entrega}} <br>
     CEP: {{$venda->itemLeilao->leilao->cep}}
       {!!$venda->observacao!!}
     </p>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhuma venda efetuada</p>
@endforelse
</section>

@endsection
