@extends('template.template')
@section('content')
    <h3>Motoristas</h3>
    <a href="{{ route('lista-motorista.create') }}"><button  type="button" class="btn btn-primary btn-add"> Adicionar <i class="fas fa-user-plus"></i></button></a>
    <table class="table table-hover">
            <tr> 
                <th>Nome:</th>
                <th>CPF:</th>
                <th>Cidade: </th>
                <th>Telefone: </th>
                <th>Editar: </th>
                <th>Informações: </th>


            </tr>
            @foreach($motoristas as $motorista )
            <tr>
                
                <td>{{ $motorista->nome }}</td>
                <td>{{ $motorista->cpf }}</td>
                <td>{{ $motorista->cidade }}</td>
                <td>{{ $motorista->telefone }}</td>
                <td> <a href="{{ route('lista-motorista.edit', $motorista->id) }}" class="edit">
            <i class="fas fa-edit"></i>
            </td></a>
            
            <td><a href="{{ route('lista-motorista.show', $motorista->id ) }}" class="delet">
            <i class="fas fa-info-circle"></i>
              </a></td>

            </tr>
            @endforeach
           
    </table>
@endsection