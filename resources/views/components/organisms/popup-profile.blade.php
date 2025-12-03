<div class="modal-overlay" id="popup-perfil" style="display: none;">
    <div class="modal-card">
        
        <header class="popup-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
            <div class="modal-content-logo" style="margin: 0;">
                <img src="{{ asset('img/logo-imagem.png') }}" alt="Logo World Tour" style="max-height: 50px;">
            </div>
            
            <button class="btn-close" type="button" style="background: none; border: none; cursor: pointer;">
                <img src="{{ asset('img/close-icon.png') }}" alt="Fechar" width="24">
            </button>
        </header>

        <section class="popup-form">
            
            <div class="form-group mb-3">
                <x-input-label for="name_profile" value="Nome" />
                <x-text-input 
                    id="name_profile" 
                    type="text" 
                    class="form-input block w-full" 
                    :value="Auth::user()->name ?? 'Visitante'" 
                    readonly 
                />
            </div>
            
            <div class="form-group mb-3">
                <x-input-label for="cpf_profile" value="CPF" />
                <x-text-input 
                    id="cpf_profile" 
                    type="text" 
                    class="form-input block w-full" 
                    value="000.000.000-00" 
                    readonly 
                />
            </div>
            
            <div class="form-group mb-3">
                <x-input-label for="email_profile" value="Email" />
                <x-text-input 
                    id="email_profile" 
                    type="email" 
                    class="form-input block w-full" 
                    :value="Auth::user()->email ?? ''" 
                    readonly 
                />
            </div>

            <div class="form-group mb-3">
                <x-input-label for="phone_profile" value="Telefone" />
                <x-text-input 
                    id="phone_profile" 
                    type="text" 
                    class="form-input block w-full" 
                    value="(00) 00000-0000" 
                    readonly 
                />
            </div>

            <form method="POST" action="{{ route('logout') }}" class="mt-6">
                @csrf
                <button type="submit" class="button button--danger w-full" style="display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%;">
                    <img src="{{ asset('img/exit-icon.png') }}" alt="Sair" width="20">
                    Sair
                </button>
            </form>
            
            <div class="popup-footer-text mt-4 text-center">
                <p style="font-size: 14px; color: #666;">
                    Caso deseje você pode 
                    <a href="{{ route('profile.edit') }}" style="color: red; text-decoration: underline;">
                        Deletar sua conta
                    </a>
                </p>
            </div>
        </section>
    </div>
</div>