@extends('template.template')
@section('content')

    <h3>Veiculos</h3>
    <a href="{{ route('veiculos.create') }}"><button  type="button" class="btn btn-primary btn-add"> Adicionar <i class="fas fa-car"></i></button></a>
    <table  class="table table-hover">
        <tr> 
            <th>Marca:</th>
            <th>Modelo:</th>
            <th>Placa: </th>
            <th>Situação:</th>
            <th>Editar: </th>
            <th>Visualizar: </th>


        </tr>
        @foreach($veiculos as $veiculo)
        <tr>
            <td>{{ $veiculo->marca }}</td>
            <td>{{ $veiculo->modelo }}</td>
            <td>{{ $veiculo->placa }}</td>
            <td>{{ $veiculo->situacao }}</td>
            <td> <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="edit">
            <i class="fas fa-edit"></i>
            </td></a>
            
            <td><a href="{{ route('veiculos.show', $veiculo->id ) }}" class="delet">
            <i class="fas fa-info-circle"></i>
              </a></td>
        </tr>
        @endforeach
    </table>
    <!-- Fim da seção -->
@endsection
