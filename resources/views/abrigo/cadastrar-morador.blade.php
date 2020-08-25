@extends('layouts.app')

@section('titulo','Cadastro de morador')

@section('content')
<div class="container margin-top">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">Cadastro de morador</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('abrigo.cadastrar-morador') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">Idade</label>

                            <div class="col-md-6">
                                <input id="idade" type="text" class="form-control" name="idade" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="especialidade" class="col-md-4 col-form-label text-md-right">Especialidade</label>

                            <div class="col-md-6">
                                <input id="especialidade" type="text" class="form-control" name="especialidade" value="{{ old('name') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição</label>

                            <div class="col-md-6">
                                <textarea id="descricao" class="form-control" name="descricao" value="{{ old('name') }}" required> </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="sexo" id="sexo">
                                    <option>Escolha o Sexo</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                  </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="ativo" id="ativo" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="ativo">
                                        Ativo
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar cadastro
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
