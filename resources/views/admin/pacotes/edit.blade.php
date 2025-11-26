@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h1>Editar Pacote</h1>

    {{-- Exibe erros de validação --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.pacotes.update', $pacote->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" value="{{ old('nome', $pacote->nome) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Continente</label>
            <input type="text" name="continente" value="{{ old('continente', $pacote->continente) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>País</label>
            <input type="text" name="pais" value="{{ old('pais', $pacote->pais) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="preco" value="{{ old('preco', $pacote->preco) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Data Início</label>
            <input type="date" name="data_inicio" value="{{ old('data_inicio', optional($pacote->data_inicio)->format('Y-m-d')) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Data Fim</label>
            <input type="date" name="data_fim" value="{{ old('data_fim', optional($pacote->data_fim)->format('Y-m-d')) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control">{{ old('descricao', $pacote->descricao) }}</textarea>
        </div>

        <button class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
