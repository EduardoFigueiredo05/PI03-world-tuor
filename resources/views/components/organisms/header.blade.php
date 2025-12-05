</head>
<header class="home-header">
    <div class="home-header-container">

        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('img/LogoBranca.png') }}"
                 alt="World Tuor Logo"
                 style="height: 250px; display: block;">
        </a>

       <nav class="home-nav">
    <a href="{{ route('home') }}" class="home-nav__link home-nav__link--active">Home</a>
    <a href="{{ route('site.pacotes') }}" class="home-nav__link">Pacotes</a>
    <a href="{{ route('site.user.packages') }}" class="home-nav__link">Carrinho</a>

    @auth
        @if(Auth::user()->is_admin)
            <a href="{{ route('admin.dashboard') }}" class="home-nav__link" style="color: #FFD700; font-weight: bold;">
                <i class="material-icons" style="font-size: 18px; vertical-align: middle;">admin_panel_settings</i>
                Painel Admin
            </a>
        @endif
    @endauth
</nav>

        <button id="btn-open-profile" class="user-button border-white">
            <i class="material-icons">person</i>
        </button>

    </div>
</header>
