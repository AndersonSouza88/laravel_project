@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> <strong>Deletar veiculo</strong> </h1>
        <hr>
        <form action="{{ route('excluir_vehicles', ['id' => $vehicles->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Tem certeza que deseja excluir este produto??</label><br />
                <input type="text" name="nome" value="{{ $vehicles->modelo }}"><br />
            </div>
            <div class="form-group">
                <input type="submit" name="save" value="Excluir Veiculo">
                <a class="btn btn-primary"
                href="{{ route('ver_vehicles') }}" type="button"
                title="cancelar">Cancelar</a>
            </div>       
    </div>

    </form>
@endsection
