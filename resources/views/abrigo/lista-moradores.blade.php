@extends('layouts.app')

@section('titulo','Lista de moradores')

@section('content')
    <div class="container margin-top">
        <h3 class="text-center post-title marg-top">Lista de moradores</h3>
        @if(\Session::has('message'))
        <p class="alert {{ \Session::get('alert-class', 'alert-success') }}">{{ \Session::get('message') }}</p>
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
            <tbody>
                <tr>
                  <td>José da Silva</td>
                  <td>32</td>
                  <td>Porto Alegre</td>
                  <td>Pedreiro</td>
                  {{-- <td class="align-top">
                      <a class="btn btn-outline-primary" href="{{ route('admin.hospital.editar', $registro->id) }}" role="button">Editar</a>
                      <button data-id="{{ $registro->id }}" class="btn btn-outline-danger" type="button" onclick="confirmarDelete()" id="idHospital">Deletar</button>
                  </td> --}}
                </tr>
                <tr>
                    <td>José da Silva</td>
                    <td>32</td>
                    <td>Porto Alegre</td>
                    <td>Pedreiro</td>
                    {{-- <td class="align-top">
                        <a class="btn btn-outline-primary" href="{{ route('admin.hospital.editar', $registro->id) }}" role="button">Editar</a>
                        <button data-id="{{ $registro->id }}" class="btn btn-outline-danger" type="button" onclick="confirmarDelete()" id="idHospital">Deletar</button>
                    </td> --}}
                  </tr>
                  <tr>
                    <td>José da Silva</td>
                    <td>32</td>
                    <td>Porto Alegre</td>
                    <td>Pedreiro</td>
                    {{-- <td class="align-top">
                        <a class="btn btn-outline-primary" href="{{ route('admin.hospital.editar', $registro->id) }}" role="button">Editar</a>
                        <button data-id="{{ $registro->id }}" class="btn btn-outline-danger" type="button" onclick="confirmarDelete()" id="idHospital">Deletar</button>
                    </td> --}}
                  </tr>
              </tbody>

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
          {{-- <div class="row col-md-2">
            <a class="btn btn-outline-success" href="#" role="button">Adicionar</a>
          </div> --}}
    </div>
@endsection
