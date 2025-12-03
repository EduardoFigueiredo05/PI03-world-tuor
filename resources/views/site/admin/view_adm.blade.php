@extends('layouts.site')

@section('title', 'View Adm - Word Tour')

@section('content')


    <div class="page-header-container">
        <h2 class="page-header-title">View Adm</h2>
    </div>

    <main class="admin-main-container">
        
        <div class="admin-table-wrapper">
            <div class="admin-table-header">
                <h3>View Pacotes</h3>
            </div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nome do pacote</th>
                        <th>Continente</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" class="admin-table-link">Tour Maresias – Cidades...</a></td>
                        <td>África</td>
                        <td>8 dias de história e...</td>
                        <td class="admin-table-actions">
                            <button class="btn-action btn-action--edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path></svg>
                            </button>
                            <button class="btn-action btn-action--delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="admin-table-wrapper">
            <div class="admin-table-header">
                <h3>View Categorias/Continentes</h3>
            </div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nome do Continente</th>
                        <th>Quantidade de pacotes...</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>América do Sul</td>
                        <td>2</td>
                        <td class="admin-table-actions">
                             <button class="btn-action btn-action--edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path></svg>
                            </button>
                            <button class="btn-action btn-action--delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="admin-table-wrapper">
            <div class="admin-table-header">
                <h3>View Usuários</h3>
            </div>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Data de Criação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>João da Silva</td>
                        <td>joao@exemplo.com</td>
                        <td>Cliente</td>
                        <td>12/09/2025</td>
                        <td class="admin-table-actions">
                            <button class="btn-action btn-action--delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    
  
@endsection
