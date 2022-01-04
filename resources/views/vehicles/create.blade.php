@extends('layouts.app')

@section('content')

    <div class="container">

        <h1> <strong>Cadastrar um novo veiculo</strong> </h1>
        <hr>
        <div class="row">
            <form action="{{ route('register_vehicles') }}" method="POST">
                @csrf
                <div class="row">
                    <table class="table">
                        <div class="form-row">
                            <div class="col">
                                <label for="">Categoria</label><br />
                                <select class="form-control @if ($errors->has('categoria')) is-invalid @endif " name="categoria">
                                    <option selected value="{{ old('categoria') }}">Selecionar...</option>
                                    @foreach ($categoria as $category)
                                        @if (old('categoria') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}
                                            </option>
                                        @endif
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
                                    value="{{ old('marca') }}">
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
                                <input type="text" class="form-control @if ($errors->has('modelo')) is-invalid @endif " name="modelo"
                                    value="{{ old('modelo') }}">
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
                                <input type="text" class="form-control @if ($errors->has('versao')) is-invalid @endif " name="versao"
                                    value="{{ old('versao') }}">
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
                                <input type="text" class="form-control @if ($errors->has('placa')) is-invalid @endif " name="placa"
                                    value="{{ old('placa') }}">
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
                                <input type="text" class="form-control @if ($errors->has('anomodelo')) is-invalid @endif " name="anomodelo"
                                    value="{{ old('anomodelo') }}">
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
                                    <input type="text" class="form-control @if ($errors->has('preco')) is-invalid @endif " name="preco"
                                        value="{{ old('preco') }}">
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
                                    <input type="text" class="form-control @if ($errors->has('km')) is-invalid @endif " name="km"
                                        value="{{ old('km') }}">
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
                                <select class="form-control @if ($errors->has('cambio')) is-invalid @endif " name="cambio">
                                    <option value="">Selecionar...</option>
                                    @foreach ($cambios as $cambio)
                                        @if (old('cambio') == $cambio->id)
                                            <option value="{{ $cambio->id }}" selected>{{ $cambio->name }}</option>
                                        @else
                                            <option value="{{ $cambio->id }}">{{ $cambio->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('cambio'))
                                    @foreach ($errors->get('cambio') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Direção</label><br />
                                <select class="form-control @if ($errors->has('direcao')) is-invalid @endif " name="direcao">

                                    <option value="">Selecionar...</option>
                                    @foreach ($direcoes as $direcao)
                                        @if (old('direcao') == $direcao->id)
                                            <option value="{{ $direcao->id }}" selected>{{ $direcao->name }}</option>
                                        @else
                                            <option value="{{ $direcao->id }}">{{ $direcao->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('direcao'))
                                    @foreach ($errors->get('direcao') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Cores</label><br />
                                <select class="form-control @if ($errors->has('cores')) is-invalid @endif " name="cores">
                                    @if ($errors->has('cores'))
                                        @foreach ($errors->get('cores') as $error)
                                            <div class="invalid-feedback">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                    <option value="">Selecionar...</option>
                                    @foreach ($cores as $cor)
                                        @if (old('cores') == $cor->id)
                                            <option value="{{ $cor->id }}" selected>{{ $cor->name }}</option>
                                        @else
                                            <option value="{{ $cor->id }}">{{ $cor->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('cores'))
                                    @foreach ($errors->get('cores') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Combustivel</label><br />
                                <select class="form-control @if ($errors->has('combustivel')) is-invalid @endif " name="combustivel">
                                    @if ($errors->has('combustivel'))
                                        @foreach ($errors->get('combustivel') as $error)
                                            <div class="invalid-feedback">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                    <option value="">Selecionar...</option>
                                    @foreach ($combustiveis as $combustivel)
                                        @if (old('combustivel') == $combustivel->id)
                                            <option value="{{ $combustivel->id }}" selected>{{ $combustivel->name }}
                                            </option>
                                        @else
                                            <option value="{{ $combustivel->id }}">{{ $combustivel->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('combustivel'))
                                    @foreach ($errors->get('combustivel') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col">
                                <label for="">Opcionais</label><br />
                                <select class="form-control @if ($errors->has('opcionais')) is-invalid @endif " name="opcionais">
                                    <option value="">Selecionar...</option>
                                    @foreach ($opcionais as $opcional)
                                        @if (old('opcionais') == $opcional->id)
                                            <option value="{{ $opcional->id }}" selected>{{ $opcional->name }}
                                            </option>
                                        @else
                                            <option value="{{ $opcional->id }}">{{ $opcional->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('opcionais'))
                                    @foreach ($errors->get('opcionais') as $error)
                                        <div class="invalid-feedback">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </table>
                </div>
                <hr>
                <div class="form-group">
                    <input type="submit" name="save" value="Salvar Veiculo">
                    <a class="btn btn-primary" href="{{ route('ver_vehicles') }}" type="button"
                        title="cancelar">Cancelar</a>
                </div>
            </form>

        </div>

    </div>
@endsection
