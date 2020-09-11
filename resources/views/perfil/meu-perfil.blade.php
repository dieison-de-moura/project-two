@extends('layouts.app')

@section('content')
<div class="container margin-top">
    @if (session('status-error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('status-error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @else
    @isset($usuario)

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">Dados cadastrais</div>

                <div class="card-body">
                    @php
                        // echo '<pre>';
                        //     print_r($usuario);
                    @endphp
                    <form method="POST" action="{{ route('perfil.atualizar-cadastro') }}">
                        @csrf

                        <input type="hidden" name="id_user" value="{{ $usuario->id }}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{ $usuario->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                            <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ $usuario->cidade }}" required autocomplete="cidade" autofocus>

                                @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $usuario->email }}" disabled="disable">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_user" class="col-md-4 col-form-label text-md-right">Tipo usuário</label>
                            <div class="col-md-6">
                                <input id="tipo_user" type="text" class="form-control" name="tipo_user" value="{{ $usuario->tipo_usuario }}" disabled="disable">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ 'Atualizar dados' }}
                                </button>
                                <!-- Botão para acionar modal -->
                                <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modalExemplo">
                                    Apagar conta
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Realmente deseja excluir a conta?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                Ao excluir a conta você não poderá mais acessar o portal, desejar prossegir?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <form action="{{ route('deletar-cadastro') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_user" value="{{ $usuario->id }}">
                                <button type="submit" class="btn btn-danger">
                                    Sim, eu quero excluir minha conta.
                                </button>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endisset
    @endif
</div>
@endsection
