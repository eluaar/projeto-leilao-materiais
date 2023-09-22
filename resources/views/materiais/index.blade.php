@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Materiais</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($materiais as $material)

<div class="card mx-3" style="width: 18rem;">
    <img src="{{Voyager::image($material->foto)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$material->nome}}</h5>
      <p class="card-text">{!!$material->marca!!}</p>
      <p>{{$material?->marca}}</p>
      <a href="{{route('materiais.show', ['id'=>$material->id])}}" class="btn btn-dark">Visualizar</a>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhum material cadastrado</p>
@endforelse
</section>

@endsection
