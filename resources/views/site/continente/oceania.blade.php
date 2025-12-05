@extends('layouts.site')

@section('title', 'Continente Oceania')

@section('content')



<section class="section-img-pacote">
    <div>
        <h1 class="hero-title-secndary">Oceania</h1>
    </div>
    <div class="imgs-blocks">
        <div class="img-overlay-pacotes">
            <img class="img-block-1-pacotes" src="https://images.unsplash.com/photo-1656177303261-bb9dfbdd37ae?q=80&w=2070&auto=format&fit=crop" alt="">
        </div>
        
        <div class="imgs-block-2">
            <div class="img-overlay-pacotes">
                <img class="img-block-2-pacotes" src="https://images.unsplash.com/photo-1572887069591-1bbeecf58abe?q=80&w=1374&auto=format&fit=crop" alt="">
            </div>
            
            <div class="img-overlay-pacotes">
                <img class="img-block-2-pacotes" src="https://images.unsplash.com/photo-1534027019354-7c717bedd3c3?q=80&w=1470&auto=format&fit=crop" alt="">
            </div>
        </div>
    </div>
</section>

    

<section class="section-pacotes-cards">
    <div class="hero-section-pacotes">
        <h2 class="hero-title-secndary">Confira as melhores atrações dessas localidades</h2>
        <p class="hero-subtitle-secndary">Explore os principais destinos, experiências culturais, gastronomia local, pontos turísticos famosos e passeios guiados em cidades históricas. Escolha sua próxima aventura e aproveite ofertas exclusivas.</p>
        
        <section class="cards-container-pacotes">
            <div class="card-pacotes">
                <div class="img-pacote">
                    <img src="" >
                </div>
                <a href="{{route('site.pacote.show',11)}}">
                <h3>Austrália</h3>
                </a>
                <p>Praias deslumbrantes, vida selvagem, cidades vibrantes.</p>
            </div>
            
            <div class="card-pacotes">
                <div class="img-pacote">
                    <img src="">
                </div>
                <a href="{{ route('site.pacote.show', 12) }}">
                    <h3>Nova Zelândia</h3>
            </a>
                <p>Montanhas majestosas, lagos cristalinos, cultura maori.</p>

            </div>
        </section>

        <div class="hero-section-pacotes-contact">
            <p class="hero-subtitle-secndary">Não encontrou exatamente o que buscava? Nossa equipe de especialistas em viagens está pronta para desenhar uma aventura sob medida, baseada nos seus sonhos e no seu orçamento.</p>
            <div>
                <button class="btn-check-more" type="button">Fale conosco</button>
            </div>
        </div>

    </div>
</section>

@endsection
