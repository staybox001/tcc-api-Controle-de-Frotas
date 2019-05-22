<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Cadastra motorista</title>

  <!-- Custom fonts for this template-->
  <link href="{{ url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container">
    @if( isset($motorista) )
    <form class="form" method="post" action="{{ route('cad-edit-motorista.update', $motorista->id) }}">
      {!! method_field('PUT') !!}
      @else
      <form class="form" method="post" action="{{ route('cad-edit-motorista.store') }}">
        @endif
        <!-- _token -->
        {!! csrf_field() !!}
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">



            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">

                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Adicionar novo Motorista</h1>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      Nome: <input type="text" class="form-control form-control-user" name="nome" value="{{ isset($motorista->nome) ? $motorista->nome:' ' }}">
                    </div>

                    <div class="col-sm-6">
                      CPF: <input type="text" class="form-control form-control-user" name="cpf" value="{{ isset($motorista->cpf) ? $motorista->cpf:' ' }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      Telefone: <input type="text" class="form-control form-control-user" name="telefone" value="{{ isset($motorista->telefone) ? $motorista->telefone:' ' }}">
                    </div>
                    <div class="col-sm-6">
                      Cidade: <input type="text" class="form-control form-control-user" name="cidade" value="{{ isset($motorista->cidade) ? $motorista->cidade:' ' }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      Endereço: <input type="text" class="form-control form-control-user" name="endereco" value="{{ isset($motorista->endereco) ? $motorista->endereco:' ' }}">
                    </div>

                    <div class="col-sm-6">
                      Veiculo:
                      <select name="veiculo_id" class="form-control">
                        <option selected>Selecione a placa</option>
                        @foreach($veiculos as $veiculo)
                        <option value="{{ $veiculo->id }}">{{ $veiculo->modelo }} | {{ $veiculo->placa }}</option>

                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <button class="btn btn-primary btn-user btn-block">
                        Adicionar</button>
                    </div>

                  </div>
                  <!-- exibe erros de validação na tela -->
                  <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                      @if( isset($errors) && count(($errors)) > 0)
                      <div class="alert alert-danger">
                        @foreach($errors->all() as $error )
                        <p>{{ $error }}</p>
                        @endforeach
                      </div>
                      @endif
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </form>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

      <!-- Core plugin JavaScript-->
      <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

      <!-- Custom scripts for all pages-->
      <script src="{{ url('js/sb-admin-2.min.js') }}"></script>

</body>

</html>