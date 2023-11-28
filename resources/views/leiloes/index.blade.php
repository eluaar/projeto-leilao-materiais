@extends('layouts.app')

@section('conteudo')

<h1 class="text-center my-5">Leilões</h1>

<section class="d-flex justify-content-center flex-nowrap">
@forelse ($leiloes as $leilao)

<div class="card  mx-3" style="width: 18rem;">
    <img src="{{@asset('assets/images/leilao1.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$leilao->nome}}</h5>
      <p class="card-text">{!!$leilao->descricao!!}</p>
      <p>{{$leilao?->comprador?->name}}</p>
      <a href="{{route('leiloes.show', ['id'=>$leilao->id])}}" class="btn btn-dark">Visualizar</a>
      <nav aria-label="Page navigation example">
      </nav>
    </div>
  </div>
  @empty
    <p class="alert alert-info">Nenhum leilão disponivel</p>
@endforelse
</section>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
    </ul>
</nav>
@endsection
