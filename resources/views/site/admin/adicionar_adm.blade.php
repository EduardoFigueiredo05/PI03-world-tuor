@extends('layouts.site')

@section('title', 'Adicionar Administrador - Word Tour ADM')

@section('content')


    <div class="page-header-container">
        <a href="{{ route('admin.dashboard') }}" class="admin-back-button">&#8592;</a> 
        <h2 class="page-header-title">Adicionar Administrador</h2>
    </div>

    <main class="admin-form-container">
        
        <form class="admin-form" action="#" method="POST">

            <div class="form-group form-group--full-width">
                <label class="form-label" for="nome_adm">Nome Completo</label>
                <input class="form-input" type="text" id="nome_adm" name="nome_adm" placeholder="Ex: João Silva">
            </div>

            <div class="form-group form-group--full-width">
                <label class="form-label" for="email_adm">E-mail Corporativo</label>
                <input class="form-input" type="email" id="email_adm" name="email_adm" placeholder="admin@wordtour.com">
            </div>

            <div class="form-group">
                <label class="form-label" for="senha_adm">Senha</label>
                <input class="form-input" type="password" id="senha_adm" name="senha_adm">
            </div>

            <div class="form-group">
                <label class="form-label" for="confirma_senha_adm">Confirmar Senha</label>
                <input class="form-input" type="password" id="confirma_senha_adm" name="confirma_senha_adm">
            </div>
            
            <div class="admin-form-submit">
                <button type="submit" class="btn--success">Cadastrar Admin</button>
            </div>

        </form>
    </main>

    
@endsection
