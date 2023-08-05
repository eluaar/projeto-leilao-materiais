@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Empresas</h1>

@forelse ($empresas as $empresa)
<div class="card" style="width: 18rem;">
    <img src="{{@asset('assets/images/exemplos/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$empresa->nome}}</h5>
      <p class="card-text">{!!$empresa->cnpj!!}</p>
      <a href="#" class="btn btn-primary">Dar lance</a>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhuma empresa cadastrada</p>
@endforelse

@endsection
