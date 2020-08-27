@extends('layouts.app')

@section('titulo','Home')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fuild img-caroussel" src="{{ URL::asset('img/imagemcarousel1.jpg') }}" alt="Imagem responsiva">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fuild img-caroussel" src="{{ URL::asset('img/imagemcarousel2.jpg') }}" alt="Imagem responsiva">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-slider">Transporme a vida de um morador de rua</h5>
                    <p class="text-slider">Entre em contato com o abrigo resposável pelo morador de rua que você tem interesse em contratar para mais informaçãos</p>
                  </div>
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

        <section id="estatisticas" class="wrapper">
        <h2 class="title-center">Estatísticas do portal</h2>
        <p class="p-center">
            Confira as estatísticas do nosso portal!
        </p>
        <div>
            <div class="stats-box">
                <p class="stats-text">Abrigos parceiros</p>
                <span class="stats-qtd">60</span>
            </div>
            <div class="stats-box">
                <p class="stats-text">Moradores cadastrados</p>
                <span class="stats-qtd">700</span>
            </div>
            <div class="stats-box">
                <p class="stats-text">Moradores contratados</p>
                <span class="stats-qtd">250</span>
            </div>
            <div class="stats-box">
                <p class="stats-text">Cidades de origem</p>
                <span class="stats-qtd">28</span>
            </div>
        </div>
        </section>


        {{-- <h3 class="text-center post-title marg-top">Ultimas postagens</h3> --}}
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
