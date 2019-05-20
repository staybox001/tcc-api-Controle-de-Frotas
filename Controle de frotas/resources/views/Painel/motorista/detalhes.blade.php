  @extends('template.template')
  @section('content')
  <div class="form-group row">
    <!-- dados do motorista -->
    <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
        <img src="http://www.liliamribas.com.br/wp-content/uploads/2016/09/default-user-img.jpg"  width="200" height="257" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Detalhes do motorista: </h5>
          <h4>{{ $motorista->nome }}</h4>
          <p class="card-text"></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nome: {{ $motorista->nome }}</li>
          <li class="list-group-item">CPF: {{ $motorista->cpf }}</li>
          <li class="list-group-item">Endereço: {{ $motorista->endereco }}</li>
          <li class="list-group-item">Telefone: {{ $motorista->telefone }}</li>
        </ul>
        <div class="card-body">

        </div>
      </div>
      <!-- retorna erros -->
      @if( isset($errors) && count($errors) > 0 )
      <div class="alert alert-danger">
        @foreach( $errors->all() as $error )
        <p>{{$error}}</p>
        @endforeach
      </div>
      @endif

      <!-- Botão de deletar -->
      <form method="POST" action="">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="submit" value="Deletar: {{$motorista->nome}}" class="btn btn-danger" title="Deletar">
      </form>
    </div>

    <!-- dados do veículo -->
    <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
        <img src="https://scontent-atl3-1.cdninstagram.com/vp/9892f9fecac0de0f606c0e6246e44f20/5D567382/t51.2885-15/e35/51752538_561082844391262_7236740455236381124_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Veículo atual: {{ $veiculo_atual->placa }}</h5>
          <p class="card-text"></p>
        </div>
        <div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Modelo: {{ $veiculo_atual->modelo }}</li>
            <li class="list-group-item">Marca: {{ $veiculo_atual->marca }}</li>
            <li class="list-group-item">Placa: {{ $veiculo_atual->placa }}</li>
            <li class="list-group-item">Situação: {{ $veiculo_atual->situacao }}</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Infrações do condutor -->
    <div class="col-sm-4 mb-3 mb-sm-0">
      <h3>Histórico de infrações:</h3>
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

       <p> The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
    </div>

    @endsection