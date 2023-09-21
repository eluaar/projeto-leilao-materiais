@extends('layouts.app')

@section('conteudo')

<h1 class="text-center">Empresas</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($empresas as $empresa)


<div class="card mx-3" style="width: 18rem;">
    <img src="{{@asset('assets/images/exemplos/1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$empresa->nome}}</h5>
      <p class="card-text">{{$empresa->cnpj}}</p>
      <p> {{$empresa?->comprador?->name}} </p>
      <a href="{{route('empresas.show', ['id'=>$empresa->id])}}" class="btn btn-dark">Efetuar lance</a>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhum leilão disponivel</p>
@endforelse
</section>
@endsection
