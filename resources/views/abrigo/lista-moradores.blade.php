@extends('layouts.app')

@section('titulo','Lista de moradores')

@section('content')
    <div class="container margin-top">
        <h3 class="text-center post-title marg-top">Lista de moradores</h3>

        <table class="table table-hover table-striped marg-top">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Cidade</th>
                <th scope="col">Especialidade</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>

            @isset($pessoas)
                @foreach ($pessoas as $pessoa)
                <tbody>
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->idade }}</td>
                    <td>{{ $pessoa->sexo }}</td>
                    <td>{{ $pessoa->especialidade }}</td>
                    <td>
                        {{-- <a class="btn btn-outline-primary" href="{{ route('detalhar-modador', $pessoa->id) }}" role="button">Editar</a> --}}
                        @if (session('tipo'))
                            <a class="btn btn-outline-primary" href="{{ route('detalhar.morador', $pessoa->id) }}"  type="button">Editar</a>
                            <a class="btn btn-outline-danger" data-toggle="modal" data-target="#modalExemplo" href="#" type="button" id="idHospital">Deletar</a>

                        @else
                            <a class="btn btn-outline-info" href="{{ route('perfil.morador', $pessoa->id) }}"  type="button">Perfil</a>
                        @endif
                    </td>
                </tr>
                </tbody>
                @endforeach
            @endisset
          </table>

            <!-- Modal -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realmente deseja excluir esse cadastro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    Ao excluir o cadastro ele não será mais acessível, desejar prossegir?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <form action="{{ route('deletar-morador') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_user" value="{{ $pessoa->id }}">
                    <button type="submit" class="btn btn-danger">
                        Sim, eu quero excluir esse cadastro.
                    </button>
                </form>
                </div>
            </div>
            </div>
        </div>
          {{-- <div class="row col-md-2">
            <a class="btn btn-outline-success" href="#" role="button">Adicionar</a>
          </div> --}}
    </div>
@endsection
