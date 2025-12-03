@extends('layouts.site')

@section('title', 'Continente Africa')

@section('content')



<section class="section-img-pacote">
    <div>
        <h1 class="hero-title-secndary">África</h1>
    </div>
    <div class="imgs-blocks">
        <div class="img-overlay-pacotes">
            <img class="img-block-1-pacotes" src="https://images.unsplash.com/photo-1511185307590-3c29c11275ca?q=80&w=1467&auto=format&fit=crop" alt="">
        </div>
        
        <div class="imgs-block-2">
            <div class="img-overlay-pacotes">
                <img class="img-block-2-pacotes" src="https://images.unsplash.com/photo-1621583628955-42fbc37bf424?q=80&w=735&auto=format&fit=crop" alt="">
            </div>
            
            <div class="img-overlay-pacotes">
                <img class="img-block-2-pacotes" src="https://images.unsplash.com/photo-1578326626553-39f72c545b07?q=80&w=1998&auto=format&fit=crop" alt="">
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
                <h3>Egito</h3>
                <p>Pirâmides, história antiga, cultura fascinante.</p>
            </div>
            
            <div class="card-pacotes">
                <div class="img-pacote">
                    <img src="">
                </div>
                <h3>África do Sul</h3>
                <p>Desertos, safáris, vida selvagem.</p>
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




<div class="popup-overlay" id="popup-perfil" style="display: none;">
    <div class="popup-container">
        
        <button class="btn-close">
            <span class="material-symbols-outlined">close</span>
        </button>
        
        <div class="popup-header">
            <img src="./img/3.png" alt="World Tour" class="popup-logo">
        </div>
        
        <form class="popup-form">
            
            <div class="form-group-icon">
                <label class="form-label">Nome</label>
                <div class="input-wrapper">
                    <span class="input-icon material-symbols-outlined">person</span>
                    <input type="text" class="form-input" value="Nome do Usuário" readonly>
                </div>
            </div>
            
            <div class="form-group-icon">
                <label class="form-label">CPF</label>
                <div class="input-wrapper">
                    <span class="input-icon material-symbols-outlined">badge</span>
                    <input type="text" class="form-input" value="***.***.***-**" readonly>
                </div>
            </div>
            
            <div class="form-group-icon">
                <label class="form-label">Email</label>
                <div class="input-wrapper has-right-icon">
                    <span class="input-icon material-symbols-outlined">mail</span>
                    <input type="email" class="form-input" value="usuario@email.com">
                    
                    <span class="input-icon right material-symbols-outlined">edit</span>
                </div>
            </div>
            
            <div class="form-group-icon">
                <label class="form-label">Telefone</label>
                <div class="input-wrapper has-right-icon">
                    <span class="input-icon material-symbols-outlined">call</span>
                    <input type="tel" class="form-input" value="+55 11 91234-5678">
                    
                    <span class="input-icon right material-symbols-outlined">edit</span>
                </div>
            </div>
            
            <button type="button" class="button button--danger button--full" id="btn-sair">
                <span class="material-symbols-outlined" style="font-size: 20px; margin-right: 8px;">logout</span>
                Sair
            </button>
        </form>
        
        <div class="popup-footer-text">
            <p>Deseja <strong style="cursor:pointer;">Deletar sua conta?</strong></p>
        </div>
    </div>
</div>
@endsection
