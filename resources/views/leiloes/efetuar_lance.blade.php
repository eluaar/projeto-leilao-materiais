@extends('layouts.app')

@section('conteudo')

<h1 class="text-center my-5">Efetuar lance</h1>

<form class="row g-3" action="{{route('lances')}}" method="post">
    @csrf
    <div class="col-md-12">
    Item: {{$itemLeilao->material->nome}} <br> Quantidade: {{$itemLeilao->quantidade}}
    <input type="hidden" name="item_id" value="{{$itemLeilao->id}}">
    </div>
    <div class="col-md-6">
        <label for="valor" class="form-label">Valor</label>
        <input step="0.01" type="number" class="form-control" id="valor" value="" required name="valor">
      </div>
    <div class="col-md-6">
        <label for="prazo_de_entrega" class="form-label">Prazo de entrega</label>
        <input type="date" class="form-control" id="prazo_de_entrega" value="" required name="prazo_de_entrega">
      </div>
    <div class="col-md-12">
        <label for="observacao" class="form-label">Observação</label>
        <textarea class="form-control" id="observacao" value="" required name="observacao"> </textarea>
      </div>


   <!--
    <div class="col-md-4">
      <label for="validationServer01" class="form-label">First name</label>
      <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServer02" class="form-label">Last name</label>
      <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationServerUsername" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend3">@</span>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationServer03" class="form-label">City</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
      <div id="validationServer03Feedback" class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationServer04" class="form-label">State</label>
      <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
      <div id="validationServer04Feedback" class="invalid-feedback">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-3">
      <label for="validationServer05" class="form-label">Zip</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
      <div id="validationServer05Feedback" class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
        <label class="form-check-label" for="invalidCheck3">
          Agree to terms and conditions
        </label>
        <div id="invalidCheck3Feedback" class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div> -->
    <div class="col-12">
      <button class="btn btn-dark" type="submit">Salvar lance</button>
    </div>
  </form>

@endsection
