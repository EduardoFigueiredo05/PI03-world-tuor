@extends('layouts.site')

@section('title', 'Pacotes')

@section('content')

    
    <section class="img-map">
        <div class="img-map-wrapper"
        style="background-image: linear-gradient(transparent, rgba(0, 0, 0, 0.74)), url('https://images.unsplash.com/photo-1723306744533-bed5a4f696dc?q=80&w=1589&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="img-map-overlay">
            <h1 class="hero-title">O mundo está ao seu alcance</h1>
            <p class="hero-subtitle">Sua próxima aventura começa aqui.</p>
        </div>
    </div>
</section>

<main>
    <section class="section-pacotes">
        <div class="header-pacotes ">
            <h1 class="hero-title ">Explore por Continentes</h1>
            <div class="section-text-pacotes">
                <p class="hero-subtitle">De ruínas antigas a metrópoles futuristas, cada continente oferece uma experiência única. Navegue por nossas coleções e encontre o roteiro que mais combina com seu espírito aventureiro. O primeiro passo para a sua viagem dos sonhos está a um clique de distância</p>
            </div>
        </div>
        <section class="cards-container-pacotes">
            <a href="{{ route('site.continente.america-sul') }}" class="card-pacotes" data-continent="america-sul">
                <div class="img-pacote">
                    <img src="https://images.unsplash.com/photo-1619546952812-520e98064a52?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="América do Sul">
                </div>
                <h3>America do Sul</h3>
                <p>Aventura, paisagens naturais, história.</p>
            </a>
            
            <a href="{{ route('site.continente.america-norte') }}" class="card-pacotes" data-continent="america-norte">
                <div class="img-pacote">
                    <img src="https://images.unsplash.com/photo-1588272947922-21cbc34dc3a7?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="América do Norte">
                </div>
                <h3>America do Norte</h3>
                <p>Metrópoles, parques, diversão.</p>
            </a>
        </section>
        
        <section class="cards-container-pacotes">
            <a href="{{ route('site.continente.africa') }}" class="card-pacotes" data-continent="africa">
                <div class="img-pacote">
                    <img src="https://images.unsplash.com/photo-1511185307590-3c29c11275ca?q=80&w=1467&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="África">
                </div>
                <h3>África</h3>
                <p>Safári, história, natureza.</p>
            </a>
            
            <a href="{{ route('site.continente.asia') }}" class="card-pacotes" data-continent="asia">
                <div class="img-pacote">
                    <img src="https://images.unsplash.com/photo-1522547902298-51566e4fb383?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Ásia">
                </div>
                <h3>Ásia</h3>
                <p>Templos, cultura, culinária.</p>
            </a>
        </section>
        
        <section class="cards-container-pacotes">
            <a href="{{ route('site.continente.europa') }}" class="card-pacotes" data-continent="europa">
                <div class="img-pacote">
                    <img src="https://images.unsplash.com/photo-1603808523691-a2f471d415f0?q=80&w=1495&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Europa">
                </div>
                <h3>Europa</h3>
                <p>Cidades históricas, museus, gastronomia.</p>
            </a>
            
            <a href="{{ route('site.continente.oceania') }}" class="card-pacotes" data-continent="oceania">
                <div class="img-pacote">
                    <img src="https://images.unsplash.com/photo-1656177303261-bb9dfbdd37ae?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Oceania">
                </div>
                <h3>Oceania</h3>
                <p>Praias, vida selvagem, ilhas.</p>
            </a>
        </section>

        <div class="header-pacotes ">
            <h1 class="hero-title">Procurando um roteiro 100% personalizado?</h1>
            <div class="section-text-pacotes">
                <p class="hero-subtitle">Não encontrou exatamente o que buscava? Nossa equipe de especialistas em viagens está pronta para desenhar uma aventura sob medida, baseada nos seus sonhos e no seu orçamento.</p>
            </div>
            <button class="btn-check-more" type="button">Fale com um Consultor</button>
        </div>
    </section>
    
    
</main>




<script>
const imageData = {
  'america-sul': [
    'https://images.unsplash.com/photo-1619546952812-520e98064a52?q=80&w=1471&auto=format&fit=crop',
    'https://plus.unsplash.com/premium_photo-1697729955700-6004e5402a74?q=80&w=1470&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1743039029427-6aa842ca469a?q=80&w=1470&auto=format&fit=crop'
  ],
  'america-norte': [
    'https://images.unsplash.com/photo-1588272947922-21cbc34dc3a7?q=80&w=1470&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1603015245012-68988952fc73?q=80&w=1470&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1678806922638-27bf485490ae?q=80&w=1631&auto=format&fit=crop'
  ],
  'africa': [
    'https://images.unsplash.com/photo-1511185307590-3c29c11275ca?q=80&w=1467&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1621583628955-42fbc37bf424?q=80&w=735&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1578326626553-39f72c545b07?q=80&w=1998&auto=format&fit=crop'
  ],
  'asia': [
    'https://images.unsplash.com/photo-1522547902298-51566e4fb383?q=80&w=735&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1528164344705-47542687000d?q=80&w=1492&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1585631474537-46643eea8df2?q=80&w=1471&auto=format&fit=crop'
  ],
  'europa': [
    'https://images.unsplash.com/photo-1603808523691-a2f471d415f0?q=80&w=1495&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1499678329028-101435549a4e?q=80&w=2070&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1468914793027-6ecfb73cb1ed?q=80&w=2070&auto=format&fit=crop'
  ],
  'oceania': [
    'https://images.unsplash.com/photo-1656177303261-bb9dfbdd37ae?q=80&w=2070&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1572887069591-1bbeecf58abe?q=80&w=1374&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1534027019354-7c717bedd3c3?q=80&w=1470&auto=format&fit=crop'
  ]
};

const timers = new Map();
const indices = {};

function fadeToImage(img, nextSrc, duration = 200) {
    if (!img._transitionSet) {
        img.style.transition = `opacity ${duration}ms ease`;
        img._transitionSet = true;
    }

    if (img._isFading) return;
    img._isFading = true;

    img.style.opacity = '0';

    const onFadeOutEnd = () => {
        img.removeEventListener('transitionend', onFadeOutEnd);
        img.src = nextSrc;

        void img.offsetWidth;

        img.addEventListener('transitionend', onFadeInEnd, { once: true });
        img.style.opacity = '1';
    };

    const onFadeInEnd = () => {
        img._isFading = false;
    };

    img.addEventListener('transitionend', onFadeOutEnd, { once: true });
}

function startRotation(card) {
    const continent = card.getAttribute('data-continent');
    const img = card.querySelector('.img-pacote img');
    const list = imageData[continent];
    if (!list || list.length < 2) return;

    if (!indices[continent] && indices[continent] !== 0) indices[continent] = 0;
    if (timers.has(card)) return;

    img.style.opacity = '1';

    const tick = () => {
        indices[continent] = (indices[continent] + 1) % list.length;
        const nextSrc = list[indices[continent]];
        fadeToImage(img, nextSrc, 500);
        const id = setTimeout(tick, 2000); 
        timers.set(card, id);
    };

    const id = setTimeout(tick, 800);
    timers.set(card, id);
}

function stopRotation(card) {
    const continent = card.getAttribute('data-continent');
    const img = card.querySelector('.img-pacote img');
    const list = imageData[continent];

    const currentTimer = timers.get(card);
    if (currentTimer) {
        clearTimeout(currentTimer);
        timers.delete(card);
    }

    if (list && list.length) {
        if (img._isFading) {
            const finalize = () => {
                img.removeEventListener('transitionend', finalize);
                img.style.opacity = '0';
                const afterOut = () => {
                    img.removeEventListener('transitionend', afterOut);
                    img.src = list[0];
                    indices[continent] = 0;
                    void img.offsetWidth;
                    img.style.opacity = '1';
                };
                img.addEventListener('transitionend', afterOut, { once: true });
            };
            img.addEventListener('transitionend', finalize, { once: true });
        } else {
            fadeToImage(img, list[0], 400);
            indices[continent] = 0;
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.card-pacotes').forEach(card => {
        const img = card.querySelector('.img-pacote img');
        img.style.opacity = '1';
        img.style.willChange = 'opacity';
        card.addEventListener('mouseenter', () => startRotation(card));
        card.addEventListener('mouseleave', () => stopRotation(card));
    });
});



</script>
@endsection
