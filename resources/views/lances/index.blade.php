@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Lances</h1>

@forelse ($lances as $lance)
<div class="card" style="width: 18rem;">
    <img src="{{@asset('assets/images/exemplos/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$lance->nome}}</h5>
      <p class="card-text">{{$lance->tempo}}</p>
      <a href="{{route('lances.show', ['id'=>$lance->id])}}" class="btn btn-primary">Dar lance</a>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhum lance encontrado</p>
@endforelse

@endsection
