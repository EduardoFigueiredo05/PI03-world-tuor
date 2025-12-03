@extends('layouts.site')

@section('title', 'Criar Conta - Word Tour')

@section('content')
<div class="modal-overlay">
        <div class="modal-card" style="max-width: 600px;"> 
            
            <a href="{{ route('site.home') }}" class="modal-close" aria-label="Fechar">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="#6C757D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            
            <div class="modal-content-logo">
                <img src="{{ asset(\'img/3.png\') }}">
            </div>

            <div style="text-align: center; margin-bottom: 32px;">
                <h2 style="font-size: 24px; font-weight: var(--font-weight-bold); color: var(--color-text-dark);">Crie sua conta</h2>
                <p style="color: var(--color-text-secondary); font-size: 14px; margin-top: 8px;">Preencha os dados abaixo para começar a viajar.</p>
            </div>

            <form class="admin-form" style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                
                <div class="form-group" style="grid-column: span 2;">
                    <label class="form-label" for="nome">Nome Completo</label>
                    <input class="form-input" type="text" id="nome" name="nome" placeholder="Seu nome completo">
                </div>

                <div class="form-group" style="grid-column: span 2;">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-input" type="email" id="email" name="email" placeholder="seu@email.com">
                </div>

                <div class="form-group">
                    <label class="form-label" for="cpf">CPF</label>
                    <input class="form-input" type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
                </div>

                <div class="form-group">
                    <label class="form-label" for="telefone">Telefone</label>
                    <input class="form-input" type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999">
                </div>

                <div class="form-group">
                    <label class="form-label" for="senha">Senha</label>
                    <input class="form-input" type="password" id="senha" name="senha">
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirma_senha">Confirmar Senha</label>
                    <input class="form-input" type="password" id="confirma_senha" name="confirma_senha">
                </div>

                <div style="grid-column: span 2; margin-top: 16px;">
                    <button type="submit" class="button button--primary" style="width: 100%;">Criar Conta</button>
                </div>

                <div style="grid-column: span 2; text-align: center; margin-top: 8px;">
                    <span style="color: var(--color-text-secondary); font-size: 14px;">
                        Já tem uma conta? <a href="{{ route('site.login') }}" style="color: var(--color-brand-blue); font-weight: 600; text-decoration: none;">Faça Login</a>
                    </span>
                </div>

            </form>
        </div>
    </div>
@endsection
