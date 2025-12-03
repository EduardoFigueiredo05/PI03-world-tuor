@extends('layouts.site')

@section('title', 'World Tuor - Home')

@section('content')

<main>

    <section class="hero-section"
    style="background-image: url('http://localhost:8000/img/barcelona-2.jpg')">
        <div class="hero-content">
            <h1 class="hero-title">Descubra o Mundo com a World Tuor</h1>
            <p class="hero-subtitle">
                Explore destinos incríveis e viva experiências inesquecíveis.
                Na World Tuor, sua próxima grande aventura começa com uma simples reserva.
            </p>
            <a href="#" class="button button--primary">Ver Pacotes</a>
        </div>
    </section>

    <section class="features-section">
        <h2 class="features-title">POR QUE RESERVAR COM A WORLD TUOR</h2>

        <div class="features-grid">
            <div class="feature-item">
                <h3 class="feature-item__title">Destinos Selecionados</h3>
                <p class="feature-item__text">
                    Nossos especialistas escolheram a dedo os melhores roteiros nacionais e internacionais.
                </p>
            </div>

            <div class="feature-item">
                <h3 class="feature-item__title">Reserva Fácil e Rápida</h3>
                <p class="feature-item__text">
                    Sem burocracia. Você escolhe o destino, garante sua vaga e pronto!
                </p>
            </div>

            <div class="feature-item">
                <h3 class="feature-item__title">Viva a Experiência</h3>
                <p class="feature-item__text">
                    Oferecemos experiências inesquecíveis. Planeje sua jornada hoje mesmo.
                </p>
            </div>
        </div>
    </section>

    <section class="features-section cards-container">
        <h2 class="hero-title">Nossos Melhores Pacotes</h2>
        <br>

        <div class="cards">

            {{-- CARD 1 --}}
            <div class="card">
                <div class="img-card">
                    <img src="{{ asset('img/madrid-3952068_640.jpg') }}" alt="Pacote 1">
                </div>
                <div class="content-card">
                    <h3 class="card-title">Pacote 1</h3>
                    <p class="card-description">Descrição do Pacote 1</p>
                    <a class="card-link" href="#">Ver mais detalhes e reservar</a>
                </div>
            </div>

            {{-- CARD 2 --}}
            <div class="card">
                <div class="img-card">
                    <img src="{{ asset('img/madrid-3952068_640.jpg') }}" alt="Pacote 1">
                </div>
                <div class="content-card">
                    <h3 class="card-title">Pacote 1</h3>
                    <p class="card-description">Descrição do Pacote 1</p>
                    <a class="card-link" href="#">Ver mais detalhes e reservar</a>
                </div>
            </div>

            {{-- CARD 3 --}}
            <div class="card">
                <div class="img-card">
                    <img src="{{ asset('img/madrid-3952068_640.jpg') }}" alt="Pacote 1">
                </div>
                <div class="content-card">
                    <h3 class="card-title">Pacote 1</h3>
                    <p class="card-description">Descrição do Pacote 1</p>
                    <a class="card-link" href="#">Ver mais detalhes e reservar</a>
                </div>
            </div>

        </div>
    </section>

    {{-- SEÇÃO FUNCIONAMENTO --}}
    <section class="atrative-section">

        <div class="atrative-section-top">
            <h2 class="black-title">Como nosso sistema funciona</h2>
            <p>Focamos na experiência de descoberta. Sem pagamentos, apenas reservas simuladas.</p>
        </div>

        <div class="atrative-section-cards cards">
            <div class="atrative-card">
                <h3 class="atrative-card-title">1. Escolha seu Destino</h3>
                <p class="card-text">Navegue por destinos incríveis.</p>
            </div>

            <div class="atrative-card">
                <h3 class="atrative-card-title">2. Reserve sua Vaga</h3>
                <p class="card-text">Garanta sua vaga rapidamente.</p>
            </div>

            <div class="atrative-card">
                <h3 class="atrative-card-title">3. Prepare-se para a Aventura</h3>
                <p class="card-text">Viva momentos inesquecíveis.</p>
            </div>
        </div>

        {{-- BLOCO DE IMAGENS --}}
        <div class="atrative-imgs">
            <h2 class="black-title">Conte com a nossa experiência</h2>

            <div class="imgs-blocks">
                <div class="img-overlay">
                    <img class="img-block-1"
                         src="https://images.unsplash.com/photo-1553649084-3e42773ff0e3?q=80&w=687&auto=format&fit=crop"
                         alt="">
                    <div class="img-overlay__text">
                        <h3>Descubra o mundo, um pôr do sol por vez.</h3>
                        <p>Momentos únicos que marcam para sempre.</p>
                    </div>
                </div>

                <div class="imgs-block-2">
                    <div class="img-overlay img-overlay--small">
                        <img class="img-block-2"
                             src="https://images.unsplash.com/photo-1678105627711-2315a8d4ff0c?q=80&w=687&auto=format&fit=crop"
                             alt="">
                        <div class="img-overlay__text">
                            <h3>Viajar é mergulhar em novas culturas.</h3>
                        </div>
                    </div>

                    <div class="img-overlay img-overlay--small">
                        <img class="img-block-2"
                             src="https://images.unsplash.com/photo-1677175202003-faf22716b3a7?q=80&w=1470&auto=format&fit=crop"
                             alt="">
                        <div class="img-overlay__text">
                            <h3>Descubra o mundo através dos sabores.</h3>
                            <p>Cada prato conta a história de um povo.</p>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn-check-more" type="button">Entre em Contato</button>
        </div>

        {{-- VÍDEO --}}
        <div class="atrative-video">
            <h2>Veja Algumas das Experiências</h2>

            <div class="video-wrapper">
                <iframe
                    src="https://www.youtube.com/embed/k2-LUK_vmOA?autoplay=1&mute=1&rel=0"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    loading="lazy">
                </iframe>
            </div>

            <button class="btn-check-more" type="button">Visualizar Pacotes</button>
        </div>

    </section>

</main>

@endsection
