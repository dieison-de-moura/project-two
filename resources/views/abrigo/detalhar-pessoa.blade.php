@extends('layouts.app')

@section('content')
<div class="container margin-top">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">Cadastro de morador</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('atualizar.morador', $pessoa->id) }}">
                        @csrf

                        @include('abrigo._form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
