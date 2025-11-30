<div class="popup-overlay" id="popup-perfil" style="display: none;">
    <div class="popup-container">
        
        <header class="popup-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <img src="{{ asset('img/logo-imagem.png') }}" alt="Logo World Tour" class="popup-logo" style="max-width: 150px;">
            
            <button class="btn-close" type="button">
                <img src="{{ asset('img/close-icon.png') }}" alt="Fechar">
            </button>
        </header>

        <section class="popup-form">
            <div class="form-group mb-3">
                <x-atoms.input-label for="name" value="Nome" />
                <x-atoms.text-input 
                    id="name" 
                    type="text" 
                    class="block w-full" 
                    :value="Auth::user()->name ?? 'Visitante'" 
                    readonly 
                />
            </div>
            
            <div class="form-group mb-3">
                <x-atoms.input-label for="cpf" value="CPF" />
                <x-atoms.text-input 
                    id="cpf" 
                    type="text" 
                    class="block w-full" 
                    value="000.000.000-00" 
                    readonly 
                />
            </div>
            
            <div class="form-group mb-3">
                <x-atoms.input-label for="email" value="Email" />
                <x-atoms.text-input 
                    id="email" 
                    type="email" 
                    class="block w-full" 
                    :value="Auth::user()->email ?? ''" 
                    readonly 
                />
            </div>

            <form method="POST" action="{{ route('logout') }}" class="mt-6">
                @csrf
                <button type="submit" class="button button--danger w-full" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%;">
                    <img src="{{ asset('img/exit-icon.png') }}" alt="Ícone Sair">
                    Sair
                </button>
            </form>
            
            <div class="popup-footer-text mt-4 text-center">
                <p>Caso deseje você pode 
                    <a href="{{ route('profile.edit') }}" style="color: red; text-decoration: underline;">
                        Gerenciar sua conta
                    </a>
                </p>
            </div>
        </section>
    </div>
</div>