@extends('template.template')
@section('content')

<div class="container">
  <div class="row">

    <!-- Detalhes do veículo -->
    <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card" style="width: 20rem;">
        <img src="https://scontent-atl3-1.cdninstagram.com/vp/9892f9fecac0de0f606c0e6246e44f20/5D567382/t51.2885-15/e35/51752538_561082844391262_7236740455236381124_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Detalhes do veiculo id: {{ $veiculo->id }}</h5>
          <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Motorista:</li>
          <li class="list-group-item">Km atual:</li>
          <li class="list-group-item">Modelo: {{ $veiculo->modelo }}</li>
          <li class="list-group-item">Marca: {{ $veiculo->marca }}</li>
          <li class="list-group-item">Placa: {{ $veiculo->placa }}</li>
          <li class="list-group-item">Situação: {{ $veiculo->situacao }}</li>
          <li class="list-group-item">Renavam: </li>


        </ul>
        <div class="card-body">

        </div>
      </div>
      @if( isset($errors) && count($errors) > 0 )
      <div class="alert alert-danger">
        @foreach( $errors->all() as $error )
        <p>{{$error}}</p>
        @endforeach
      </div>
      @endif

      
      <form method="POST" action="">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="button" class="btn btn-success">Editar info</button>
        <input type="submit" value="Deletar: {{$veiculo->placa}}" class="btn btn-danger" title="Deletar">
      </form>
    </div>

    <!-- manutenções do veículo -->
    <div class="col-sm-8 mb-3 mb-sm-0">
      <div>
        <button class="btn btn-secondary btn-lg btn-block">Adicionar manutenção</button>
      </div>
      <br>
      <div>
        <button class="btn btn-secondary btn-lg btn-block">Historico manutenção</button>
      </div>
      <br>
      <div>
        <button class="btn btn-secondary btn-lg btn-block">Adicionar um lembrete</button>
      </div>
      <br>
      <div>
        <button class="btn btn-secondary btn-lg btn-block">Cadastrar Pneus</button>
      </div>


    </div>

  </div>
</div>
@endsection