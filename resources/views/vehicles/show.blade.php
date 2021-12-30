@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3> <strong>Veiculos Cadastrados</strong> </h3>
            </div>
            <div class="col-md-8">
                <a href="{{ route('create_vehicles') }}" class="btn btn-primary"> Cadastrar novo Veiculo</a>
            </div>

        </div>
        @if (Session::has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('message') }}</strong>
            </div>
        @endif
        <hr>
        <div class="row">

            <table class="table table-hover table-sm ">
                <thead class="thead-dark">
                    <tr>
                        <th>Codigo Portal</th>
                        <th>Id</th>
                        <th>Categoria</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Versão</th>
                        <th>Placa</th>
                        <th>Ano do Modelo</th>
                        <th>Preço</th>
                        <th>Km</th>
                        <th>Cambio</th>
                        <th>Direção</th>
                        <th>Cor</th>
                        <th>Combustivel</th>
                        <th>Opcionais</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td> <strong>{{ $vehicle->codigo }}</strong> </td>
                            <td>{{ $vehicle->id }}</td>
                            <td>{{ $vehicle->categoria->name }}</td>
                            <td>{{ $vehicle->marca }}</td>
                            <td>{{ $vehicle->modelo }}</td>
                            <td>{{ $vehicle->versao }}</td>
                            <td>{{ $vehicle->placa }}</td>
                            <td>{{ $vehicle->anomodelo }}</td>
                            <td>R$ {{ number_format($vehicle->preco, 2, ',', '.') }}</td>
                            <td>{{ $vehicle->km }}</td>
                            <td>{{ $vehicle->cambio->name }}</td>
                            <td>{{ $vehicle->direcao->name }}</td>
                            <td>{{ $vehicle->color->name }}</td>
                            <td>{{ $vehicle->combustivel->name }}</td>
                            <td>{{ $vehicle->opcional->name }}</td>
                            <td>
                                <ul style="list-style: none;" class="btn-group">
                                    <a class="btn btn-primary"
                                        href="{{ route('editar_vehicles', ['vehicle' => $vehicle]) }}" type="button"
                                        title="Editar"><i class="fas fa-edit"></i></a>

                                    <a class="btn btn-danger"
                                        href="{{ route('deletar_vehicles', ['vehicle' => $vehicle]) }} " type="button"
                                        title="Deletar"><i class="far fa-trash-alt"></i></a>

                                    <a class="btn btn-success"
                                        href="{{ route('veiculosmaringa.insert', ['id' => $vehicle->id]) }}"
                                        type="button" title="Inserir no Portal"><i class="fas fa-upload"></i></a>

                                    <a class="btn btn-info"
                                        href="{{ route('veiculosmaringa.update', ['id' => $vehicle->id]) }}"
                                        type="button" title="Atualizar no Portal"><i class="fas fa-file-import"></i>
                                    </a>

                                    <a class="btn btn-danger"
                                        href="{{ route('veiculosmaringa.delete', ['id' => $vehicle->id]) }}"
                                        type="button" title="Deletar no Portal"><i class="fas fa-file-excel"></i>
                                    </a>

                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
