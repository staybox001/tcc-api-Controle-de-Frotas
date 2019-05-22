@extends('template.template')
@section('content')

<h4>Cadastro de manutenção</h4>

<form class="form" method="post" action="{{ route('manutencoes.store') }}">
    <!-- token de segurança -->
    {!! csrf_field() !!}

    <div class="form-group">
        <div class="form-group">
            Estabelecimento: <input class="form-control" type="text" name="estabelecimento">
        </div>


        <div class="form-group">
            Descrição do serviço: <textarea name="descricao" name="descricao" class="form-control"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                Valor R$: <input class="form-control" name="valor" type="number">
            </div>
            <div class="form-group col-md-6">
                Data: <input class="form-control" name="data" type="date">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">salvar</button>
        <!-- <button class="btn btn-danger" type="reset">Cancelar</button> -->
    </div>

</form>

@endsection