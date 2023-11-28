@extends('layouts.app')

@section('conteudo')
    <h1 class="text-center my-5">Leilão</h1>
    <div class="container overflow-hidden justify-content-center">
        <div class="row gy-5">
            <div class="col-12 p-3 border bg-light">
                <h5 class="card-title display-5"><strong>{{ $leilao->nome }}</strong></h5>
                <p class="card-text">{!! $leilao->descricao !!}</p>
            </div>
        </div>
    </div>
    <h2 class="text-center my-5 ">Materiais</h2>
    @foreach ($leilao->itens as $itemLeilao)
    <section class="d-flex justify-content-center flex-nowrap">
        <div class="card mx-3" style="width: 15rem;">
            <img src="{{ Voyager::image($itemLeilao->material->foto) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title mx-3">{{ $itemLeilao->material->nome }} - {{ $itemLeilao->material->marca }} </h3>
                <p class="card-text">
                    Quantidade: {{ $itemLeilao->quantidade }}
                </p>
                @if ($itemLeilao->lance_arrematante_id == null and $leilao->comprador_id != Auth::user()->id)
                <a href="{{ route('leiloes.efetuar_lance', ['id' => $itemLeilao->id]) }}"
                    class="btn btn-dark btn-sm">Efetuar lance</a>
                @endif
                @if ($leilao->comprador_id == Auth::user()->id)
                <a href="{{ route('lances.itemLeilao', ['id' => $itemLeilao->id]) }}" class="btn btn-dark btn-sm">Visualizar
                    lances</a>
                @endif
            </div>
        </div>
    </section>
    @endforeach
@endsection
