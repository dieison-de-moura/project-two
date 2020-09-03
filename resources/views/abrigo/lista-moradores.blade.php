@extends('layouts.app')

@section('titulo','Lista de moradores')

@section('content')
    <div class="container margin-top">
        <h3 class="text-center post-title marg-top">Lista de moradores</h3>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <table class="table table-hover table-striped marg-top">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Cidade</th>
                <th scope="col">Especialidade</th>
                {{-- <th scope="col">Ações</th> --}}
              </tr>
            </thead>

            {{-- @isset($pessoas) --}}
                @foreach ($pessoas as $pessoa)
                <tbody>
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->idade }}</td>
                    <td>{{ $pessoa->sexo }}</td>
                    <td>{{ $pessoa->especialidade }}</td>
                    {{-- <td class="align-top">
                        <a class="btn btn-outline-primary" href="{{ route('admin.hospital.editar', $pessoa->id) }}" role="button">Editar</a>
                        <button data-id="{{ $pessoa->id }}" class="btn btn-outline-danger" type="button" onclick="confirmarDelete()" id="idHospital">Deletar</button>
                    </td> --}}
                </tr>
                </tbody>
                @endforeach
            {{-- @endisset --}}
          </table>
          {{-- <div class="row col-md-2">
            <a class="btn btn-outline-success" href="#" role="button">Adicionar</a>
          </div> --}}
    </div>
@endsection
