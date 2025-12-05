@extends('layouts.site')

@section('title', 'Dashboard Administrativo')

@section('content')

    <div class="page-header-container">
        <h2 class="page-header-title">Visão Geral</h2>
        <a href="{{ route('admin.pacotes.create') }}" class="btn btn--success" style="text-decoration: none; margin-left: auto;">
            + Novo Pacote
        </a>
    </div>

    <main class="admin-main-container">
        
        <div class="admin-table-wrapper">
            <div class="admin-table-header">
                <h3>Últimos Pacotes Cadastrados (Total: {{ $totalPacotes }})</h3>
            </div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nome do pacote</th>
                        <th>Continente</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($ultimosPacotes as $pacote)
                        <tr>
                            <td>
                                <a href="{{ route('admin.pacotes.edit', $pacote->id) }}" class="admin-table-link">
                                    {{ $pacote->nome }}
                                </a>
                            </td>
                            <td>{{ $pacote->continente }}</td>
                            <td>R$ {{ number_format($pacote->preco, 2, ',', '.') }}</td>
                            <td class="admin-table-actions">
                                <a href="{{ route('admin.pacotes.edit', $pacote->id) }}" class="btn-action btn-action--edit" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z" fill="currentColor"></path></svg>
                                </a>
                                
                                <form action="{{ route('admin.pacotes.destroy', $pacote->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja apagar este pacote?');" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action btn-action--delete" title="Excluir">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z" fill="currentColor"></path></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" style="text-align: center; padding: 20px;">Nenhum pacote encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="admin-table-wrapper" style="margin-top: 40px;">
            <div class="admin-table-header" style="background-color: var(--color-text-secondary);">
                <h3>Últimos Usuários (Total: {{ $totalUsuarios }})</h3>
            </div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Data Cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ultimosUsuarios as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->is_admin)
                                    <span style="color: green; font-weight: bold;">Admin</span>
                                @else
                                    Cliente
                                @endif
                            </td>
                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
  
@endsection