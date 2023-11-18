@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Lances</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($itemLeilao->lances as $lance)

<div class="card mx-3" style="width: 18rem;">
    <img src="{{Voyager::image($itemLeilao->material->foto)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$lance->itemLeilao->material->nome}}</h5>
      <p class="card-text">{{$lance->prazo_entrega}} <br>
      {{$lance->fornecedor->name}} <br> {{$lance->valor}}</p>
      @if ($itemLeilao->lance_arrematante_id == null)
      <a href="{{ route('lances.aceitar', ['id' => $lance->id]) }}" class="btn btn-dark btn-sm">Aceitar</a>
      @endif

    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhum lance encontrado</p>
@endforelse
</section>

@endsection
