@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a  href="{{ route('ver_vehicles') }}" class="btn btn-primary">
                        {{ __('Exibir Veiculos') }}
                    </a>

                    {{-- <a class="btn btn-primary" href="{{ route('excluir_vehicles') }}">
                        {{ __('Editar Veiculos') }}
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
