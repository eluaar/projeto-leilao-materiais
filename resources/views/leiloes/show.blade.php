@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Leilão</h1>

<div class="">
    <div class="card-body">
      <h5 class="card-title">{{$leilao->nome}}</h5>
      <p class="card-text">{!!$leilao->descricao!!}</p>
    </div>
  </div>
<h2 class="text-center">Materiais</h2>
@foreach ($leilao->itens as $itemLeilao)
<div class="card  mx-3" style="width: 18rem;">
    <img src="{{Voyager::image($itemLeilao->material->foto)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title">{{$itemLeilao->material->nome}} - {{$itemLeilao->material->marca}} </h3>
      <p class="card-text">
     Quantidade:  {{$itemLeilao->quantidade}}
     </p>
     <a href="{{route('leiloes.efetuar_lance', ['id'=>$itemLeilao->id])}}" class="btn btn-dark">Efetuar lance</a>
     <a href="{{route('lances.itemLeilao', ['id'=>$itemLeilao->id])}}" class="btn btn-dark">Visualizar lances</a>
    </div>
  </div>
@endforeach
@endsection
