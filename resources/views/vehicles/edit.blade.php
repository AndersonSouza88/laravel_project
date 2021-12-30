@extends('layouts.app')

@section('content')

    <div class="container">
        <h1> <strong>Editar dados do veiculo</strong> </h1>
        <hr>

        <div class="row">
            <form action="{{ route('alterar_veiculo', ['id' => $vehicles->id]) }}" method="POST">
                @csrf
                <div class="row">
                    <table class="table">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Categoria</label><br />
                                <select class="form-control @if ($errors->has('categoria')) is-invalid @endif " name="categoria">
                                    @foreach ($categories as $category)
                                        <option @if ($category->id == $vehicles->categoria_id) selected @endif value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('categoria'))
                                    @foreach ($errors->get('categoria') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Marca</label><br />
                                <input type="text" class="form-control @if ($errors->has('marca')) is-invalid @endif " name="marca"
                                    value="{{ $vehicles->marca }}">
                                @if ($errors->has('marca'))
                                    @foreach ($errors->get('marca') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Modelo</label><br />
                                <input type="text" class="form-control  @if ($errors->has('modelo')) is-invalid @endif " name="modelo"
                                    value="{{ $vehicles->modelo }}">
                                @if ($errors->has('modelo'))
                                    @foreach ($errors->get('modelo') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Versão</label><br />
                                <input type="text" class="form-control @if ($errors->has('versao')) is-invalid @endif" name="versao"
                                    value="{{ $vehicles->versao }}">
                                @if ($errors->has('versao'))
                                    @foreach ($errors->get('versao') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Placa</label><br />
                                <input type="text" class="form-control @if ($errors->has('placa')) is-invalid @endif" name="placa"
                                    value="{{ $vehicles->placa }}">
                                @if ($errors->has('placa'))
                                    @foreach ($errors->get('placa') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Ano do Modelo</label><br />
                                <input type="text" class="form-control @if ($errors->has('anomodelo')) is-invalid @endif" name="anomodelo"
                                    value="{{ $vehicles->anomodelo }}">
                                @if ($errors->has('anomodelo'))
                                    @foreach ($errors->get('anomodelo') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-row">

                                <div class="col">
                                    <label for="">Preço</label><br />
                                    <input type="text" class="form-control @if ($errors->has('preco')) is-invalid @endif" name="preco"
                                        value="{{ $vehicles->preco }}">
                                    @if ($errors->has('preco'))
                                        @foreach ($errors->get('preco') as $error)
                                            <div class="invalid-feedback">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="col">
                                    <label for="">Km</label><br />
                                    <input type="text" class="form-control @if ($errors->has('km')) is-invalid @endif" name="km"
                                        value="{{ $vehicles->km }}">
                                    @if ($errors->has('km'))
                                        @foreach ($errors->get('km') as $error)
                                            <div class="invalid-feedback">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <div class="col">
                                <label for="">Cambio</label><br />
                                <select class="form-control" name="cambio">
                                    @foreach ($cambios as $cambio)
                                        <option @if ($cambio->id == $vehicles->cambio_id) selected @endif value="{{ $cambio->id }}">
                                            {{ $cambio->name }}
                                        </option>
                                    @endforeach
                                </select><br />
                            </div>

                            <div class="col">
                                <label for="">Direção</label><br />
                                <select class="form-control" name="direcao">
                                    @foreach ($direcoes as $direcao)
                                        <option @if ($direcao->id == $vehicles->direcao_id) selected @endif value="{{ $direcao->id }}">
                                            {{ $direcao->name }}
                                        </option>
                                    @endforeach
                                </select><br />
                            </div>
                            <div class="col">
                                <label for="">Cores</label><br />
                                <select class="form-control" name="cores">
                                    @foreach ($cores as $cor)
                                        <option @if ($cor->id == $vehicles->cores_id) selected @endif value="{{ $cor->id }}">
                                            {{ $cor->name }}
                                        </option>
                                    @endforeach
                                </select><br />
                            </div>
                            <div class="col">
                                <label for="">Combustivel</label><br />
                                <select class="form-control" name="combustivel">
                                    @foreach ($combustiveis as $combustivel)
                                        <option @if ($combustivel->id == $vehicles->combustivel_id) selected @endif value="{{ $combustivel->id }}">
                                            {{ $combustivel->name }}
                                        </option>
                                    @endforeach
                                </select><br />
                            </div>
                            <div class="col">
                                <label for="">Opcionais</label><br />
                                <select class="form-control" name="opcionais">
                                    @foreach ($opcionais as $opcional)
                                        <option @if ($opcional->id == $vehicles->opcionais_id) selected @endif value="{{ $opcional->id }}">
                                            {{ $opcional->name }}
                                        </option>
                                    @endforeach
                                </select><br />
                            </div>

                        </div>
                    </table>
                </div>
                <hr>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="save" value="Salvar Edição">
                    <a class="btn btn-primary" href="{{ route('ver_vehicles') }}" type="button"
                        title="cancelar">Cancelar</a>
                </div>
            </form>
        </div>
    @endsection
