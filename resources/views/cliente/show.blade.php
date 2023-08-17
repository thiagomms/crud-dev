@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $cliente->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Data De Nascimento:</strong>
                            {{ $cliente->data_de_nascimento }}
                        </div>
                        <div class="form-group">
                            <strong>Cpf:</strong>
                            {{ $cliente->cpf }}
                        </div>
                        <div class="form-group">
                            <strong>Idade:</strong>
                            {{ $cliente->idade }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
