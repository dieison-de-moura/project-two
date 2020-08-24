@extends('layouts.app')

@section('titulo','Home')

@section('content')
    <div class="container main-content">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ URL::asset('img/imagemcarousel1.jpg') }}" width="600" height="500" alt="Primeiro Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::asset('img/imagemcarousel2.jpg') }}" width="600" height="500" alt="Segundo Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ URL::asset('img/imagemcarousel3.jpg') }}" width="600" height="500" alt="Terceiro Slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Próximo</span>
                    </a>
                  </div>
        <h3 class="text-center post-title marg-top">Ultimas postagens</h3>
        <div class="row marg-top">
        @if (isset($registrosDoacao) && !empty($registrosDoacao))
        @foreach($registrosDoacao as $doacao)
            <div class="col-md-6">
                <div class="card card-home">
                    <div class="card-header text-white bg-dark">Tipo do sangue: {{ $doacao->tipo_sangue }}
                    </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $doacao->titulo }}</h5>
                    <p class="card-text">{{ $doacao->descricao }}</p>
                    <a href="{{ route('admin.detalhe', $doacao->id) }}" class="btn btn-primary">Visitar</a>
                </div>
                </div>
            </div>
        @endforeach
        @endif
        </div>
    </div>

@endsection
