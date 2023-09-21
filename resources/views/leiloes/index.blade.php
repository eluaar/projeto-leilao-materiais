@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Leilões</h1>

@forelse ($leiloes as $leilao)
<div class="card" style="width: 18rem;">
    <img src="{{@asset('assets/images/construcao-civil.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$leilao->nome}}</h5>
      <p class="card-text">{!!$leilao->descricao!!}</p>
      <p>{{$leilao?->comprador?->name}}</p>
      <a href="{{route('leiloes.show', ['id'=>$leilao->id])}}" class="btn btn-dark">Efetuar lance</a>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhum leilão disponivel</p>
@endforelse

@endsection
