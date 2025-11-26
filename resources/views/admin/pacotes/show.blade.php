@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h1>Detalhes do Pacote</h1>

    <div class="card">
        <div class="card-body">
            <h3>{{ $pacote->nome }}</h3>
            <p><strong>Continente:</strong> {{ $pacote->continente }}</p>
            <p><strong>País:</strong> {{ $pacote->pais }}</p>
            <p><strong>Preço:</strong> {{ number_format($pacote->preco, 2, ',', '.') }}</p>
            <p><strong>Período:</strong>
                {{ optional($pacote->data_inicio)->format('d/m/Y') }}
                -
                {{ optional($pacote->data_fim)->format('d/m/Y') }}
            </p>
            <p><strong>Descrição:</strong><br>{{ $pacote->descricao }}</p>
        </div>
    </div>

    <a href="{{ route('admin.pacotes.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>
@endsection
