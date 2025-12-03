@extends('layouts.site')

@section('title', 'Login - Word Tour')

@section('content')
<div class="modal-overlay">
        <div class="modal-card">
            
            <a href="{{ route('site.home') }}" class="modal-close" aria-label="Fechar">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18M6 6L18 18" stroke="#6C757D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <div class="modal-content-logo">
                <img src="{{ asset(\'img/3.png\') }}">
            </div>

            <div style="text-align: center; margin-bottom: 32px;">
                <h2 style="font-size: 24px; font-weight: var(--font-weight-bold); color: var(--color-text-dark);">Bem-vindo de volta</h2>
                <p style="color: var(--color-text-secondary); font-size: 14px; margin-top: 8px;">Insira seus dados para acessar sua conta.</p>
            </div>

            <form class="admin-form" style="display: flex; flex-direction: column; gap: 16px;">
                
                <div class="form-group">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-input" type="email" id="email" name="email" placeholder="seu@email.com">
                </div>

                <div class="form-group">
                    <label class="form-label" for="senha">Senha</label>
                    <input class="form-input" type="password" id="senha" name="senha" placeholder="••••••••">
                </div>

                <button type="submit" class="button button--primary" style="width: 100%; margin-top: 8px;">Entrar</button>

                <div style="text-align: center; margin-top: 16px; display: flex; flex-direction: column; gap: 12px;">
                    <a href="#" style="color: var(--color-text-secondary); font-size: 14px; text-decoration: none;">Esqueci minha senha</a>
                    
                    <span style="color: var(--color-text-secondary); font-size: 14px;">
                        Não tem conta? <a href="{{ route('site.register') }}" style="color: var(--color-brand-blue); font-weight: 600; text-decoration: none;">Cadastre-se</a>
                    </span>
                </div>

            </form>
        </div>
    </div>
@endsection
