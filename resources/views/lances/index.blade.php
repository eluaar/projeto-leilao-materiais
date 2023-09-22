@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Lances</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($lances as $lance)

<div class="card mx-3" style="width: 18rem;">
    <img src="{{@asset('assets/images/exemplos/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$lance->nome}}</h5>
      <p class="card-text">{{$lance->tempo}}</p>
      <a href="{{route('lances.show', ['id'=>$lance->id])}}" class="btn btn-dark">Dar lance</a>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhum lance encontrado</p>
@endforelse
</section>

@endsection
