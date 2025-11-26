@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h1>Novo Pacote</h1>

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

    <form action="{{ route('admin.pacotes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" required>
        </div>

        <div class="mb-3">
            <label>Continente</label>
            <input type="text" name="continente" class="form-control" value="{{ old('continente') }}" required>
        </div>

        <div class="mb-3">
            <label>País</label>
            <input type="text" name="pais" class="form-control" value="{{ old('pais') }}" required>
        </div>

        <div class="mb-3">
            <label>Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" value="{{ old('preco') }}" required>
        </div>

        <div class="mb-3">
            <label>Data Início</label>
            <input type="date" name="data_inicio" class="form-control" value="{{ old('data_inicio') }}" required>
        </div>

        <div class="mb-3">
            <label>Data Fim</label>
            <input type="date" name="data_fim" class="form-control" value="{{ old('data_fim') }}" required>
        </div>

        <div class="mb-3">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control">{{ old('descricao') }}</textarea>
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
