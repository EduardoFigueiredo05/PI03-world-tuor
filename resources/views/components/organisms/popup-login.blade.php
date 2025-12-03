<div class="modal-overlay" id="popup-login" style="display: none;">
    <div class="modal-card">
        
        <button type="button" class="modal-close btn-close-login" aria-label="Fechar">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18M6 6L18 18" stroke="#6C757D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>

        <div class="modal-content-logo">
            <img src="{{ asset('img/3.png') }}" alt="Logo World Tour">
        </div>

        <div style="text-align: center; margin-bottom: 32px;">
            <h2 style="font-size: 24px; font-weight: var(--font-weight-bold); color: var(--color-text-dark);">Bem-vindo de volta</h2>
            <p style="color: var(--color-text-secondary); font-size: 14px; margin-top: 8px;">Insira seus dados para acessar sua conta.</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="admin-form" style="display: flex; flex-direction: column; gap: 16px;">
            @csrf

            <div class="form-group">
                <x-input-label for="email_login" value="E-mail" />
                <x-text-input 
                    id="email_login" 
                    type="email" 
                    name="email" 
                    placeholder="seu@email.com" 
                    required 
                    autofocus 
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-group">
                <x-input-label for="password_login" value="Senha" />
                <x-text-input 
                    id="password_login" 
                    type="password" 
                    name="password" 
                    placeholder="••••••••" 
                    required 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <x-primary-button class="button--primary" style="width: 100%; margin-top: 8px; justify-content: center;">
                Entrar
            </x-primary-button>

            <div style="text-align: center; margin-top: 16px; display: flex; flex-direction: column; gap: 12px;">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" style="color: var(--color-text-secondary); font-size: 14px; text-decoration: none;">
                        Esqueci minha senha
                    </a>
                @endif
                
                <span style="color: var(--color-text-secondary); font-size: 14px;">
                    Não tem conta? 
                    <a href="{{ route('register') }}" style="color: var(--color-brand-blue); font-weight: 600; text-decoration: none;">
                        Cadastre-se
                    </a>
                </span>
            </div>

        </form>
    </div>
</div>