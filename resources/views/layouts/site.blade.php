<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>@yield('title') - World Tuor</title>

    {{-- CSS e JS via Vite --}}
    @vite([
        'resources/css/main.css',
        'resources/js/app.js'
    ])


</head>

<body>

    {{-- HEADER --}}
    @include('components.organisms.header')

    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('components.organisms.footer')

    {{-- POPUP PERFIL --}}
    @include('components.organisms.popup-profile')

    {{-- POPUP LOGIN --}}
    @include('components.organisms.popup-login')

    @stack('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos
            const btnUser = document.getElementById('btn-open-profile'); 
            const popupProfile = document.getElementById('popup-perfil');
            const popupLogin = document.getElementById('popup-login');
            
            // Verifica login (Blade injeta true/false)
            const isLogged = @json(Auth::check());

            // Clique no Ícone de Usuário
            if (btnUser) {
                btnUser.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    if (isLogged) {
                        // Se logado -> Abre Perfil
                        if (popupProfile) popupProfile.style.display = 'flex';
                    } else {
                        // Se não logado -> Abre Login
                        if (popupLogin) popupLogin.style.display = 'flex';
                    }
                });
            }

            // Função genérica para fechar modais
            function setupCloseModal(modalId, closeBtnClass) {
                const modal = document.getElementById(modalId);
                if (!modal) return;

                // Fechar pelo botão X
                const closeBtns = modal.querySelectorAll('.' + closeBtnClass);
                closeBtns.forEach(btn => {
                    btn.addEventListener('click', () => modal.style.display = 'none');
                });

                // Fechar clicando fora (fundo escuro)
                window.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            }

            // Ativa os fechamentos
            setupCloseModal('popup-perfil', 'btn-close');
            setupCloseModal('popup-login', 'btn-close-login');
        });
    </script>
</body>
</html>
