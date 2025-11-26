@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <h1>Pacotes</h1>

    {{-- Botão para criar novo pacote --}}
    <a href="{{ route('admin.pacotes.create') }}" class="btn btn-primary mb-3">Novo Pacote</a>

    {{-- Exibição de mensagens de sucesso --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Período</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($pacotes as $pacote)
            <tr>
                <td>{{ $pacote->id }}</td>
                <td>{{ $pacote->nome }}</td>
                <td>{{ number_format($pacote->preco, 2, ',', '.') }}</td>
                <td>
                    {{ optional($pacote->data_inicio)->format('d/m/Y') }}
                    -
                    {{ optional($pacote->data_fim)->format('d/m/Y') }}
                </td>
                <td>
                    <a href="{{ route('admin.pacotes.show', $pacote->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                    <a href="{{ route('admin.pacotes.edit', $pacote->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                    <form action="{{ route('admin.pacotes.destroy', $pacote->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Confirma exclusão?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Nenhum pacote encontrado.</td></tr>
        @endforelse
        </tbody>
    </table>

    {{-- Paginação --}}
    {{ $pacotes->links() }}
</div>
@endsection
