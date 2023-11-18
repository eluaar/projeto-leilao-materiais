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
    <h2 class="text-center my-5">Materiais</h2>
    @foreach ($leilao->itens as $itemLeilao)
        <div class="card  mx-3" style="width: 18rem;">
            <img src="{{ Voyager::image($itemLeilao->material->foto) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">{{ $itemLeilao->material->nome }} - {{ $itemLeilao->material->marca }} </h3>
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
    @endforeach
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
