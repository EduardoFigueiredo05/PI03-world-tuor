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
            <a href="{{ route('pacotes.index') }}" class="home-nav__link">Pacotes</a>
            <a href="{{ route('meus-pacotes') }}" class="home-nav__link">Carrinho</a>
        </nav>

        <button id="btn-open-profile" class="user-button border-white">
            <i class="material-icons">person</i>
        </button>

    </div>
</header>
