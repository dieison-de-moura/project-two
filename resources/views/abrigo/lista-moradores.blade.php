@extends('layouts.app')

@section('titulo','Lista de moradores')

@section('conteudo')
    <div class="container main-content">
        <h3 class="text-center post-title marg-top">Lista de Hospitais</h3>
        @if(\Session::has('message'))
        <p class="alert {{ \Session::get('alert-class', 'alert-success') }}">{{ \Session::get('message') }}</p>
        @endif
        <table class="table table-hover marg-top">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cidade</th>
                <th scope="col">Atendimento</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            {{-- @foreach ($registros as $registro)
            <tbody>
              <tr>
                <td>{{ $registro->nome }}</td>
                <td>{{ $registro->cidade }}</td>
                <td>{{ $registro->horario_atendimento }}</td>
                <td class="align-top">
                    <a class="btn btn-outline-primary" href="{{ route('admin.hospital.editar', $registro->id) }}" role="button">Editar</a>
                    <button data-id="{{ $registro->id }}" class="btn btn-outline-danger" type="button" onclick="confirmarDelete()" id="idHospital">Deletar</button>
                </td>
              </tr>
            </tbody>
            @endforeach --}}
          </table>
          <div class="row col-md-2">
            <a class="btn btn-outline-success" href="#" role="button">Adicionar</a>
          </div>
    </div>
@endsection
