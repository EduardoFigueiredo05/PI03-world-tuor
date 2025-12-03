@extends('layouts.site')

@section('title', 'Word Tour - Meus Pacotes')

@section('content')


    <div class="page-header-container">
        <h1 class="page-header-title">Meus pacotes</h1>
    </div>

    <main class="container inner-content-box">
        <section class="packages-section">
            
            <div class="packages-list">

                <div class="card-wrapper">
                    <article class="travel-card">
                        <div class="custom-checkbox-wrapper">
                            <input type="checkbox" id="pacote_madri" name="pacote_madri" checked>
                            <label for="pacote_madri" class="custom-checkbox"></label>
                        </div>
                        <div class="travel-card__body">
                            <div class="travel-card__image-container">
                                <img src="{{ asset(\'img/madrid-3952068_640.jpg\') }}" alt="Vista da Sagrada Família em Barcelona">
                            </div>
                            <div class="travel-card__content">
                                <h3 class="travel-card__title">Trip Europa – Madri, Barcelona e Holanda</h3>
                                <p class="travel-card__description">
                                    10 dias de cultura, arte e sabores inesquecíveis! De Madri à Amsterdã, passando pela vibrante Barcelona...
                                </p>
                                
                                <div class="card-status">
                                    <span class="badge">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6667 3.5L5.25 9.91667L2.33333 7" stroke="#00875F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Pacote confirmado
                                    </span>
                                </div>
                                
                                </div>
                        </div>
                    </article>
                    </div>

                <div class="card-wrapper">
                    <article class="travel-card">
                        <div class="custom-checkbox-wrapper">
                            <input type="checkbox" id="pacote_japao" name="pacote_japao" checked>
                            <label for="pacote_japao" class="custom-checkbox"></label>
                        </div>
                        <div class="travel-card__body">
                            <div class="travel-card__image-container">
                                <img src="{{ asset(\'img/japão.jpg\') }}" alt="Pagoda Chureito no Japão com Monte Fuji ao fundo">
                            </div>
                            <div class="travel-card__content">
                                <h3 class="travel-card__title">Trip Japão – Tóquio, Quioto e Osaka</h3>
                                <p class="travel-card__description">
                                    De templos milenares a metrópoles tecnológicas, cada dia revela uma nova faceta do país do sol nascente.
                                </p>
                                
                                <div class="card-status">
                                    <span class="badge">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.6667 3.5L5.25 9.91667L2.33333 7" stroke="#00875F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        Pacote confirmado
                                    </span>
                                </div>
                                
                                </div>
                        </div>
                    </article>
                    </div>
                
                <div class="section-actions">
                    <button class="button--danger">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 4H3.33333H14" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.3335 4.00002V2.66669C5.3335 2.31307 5.47395 1.97394 5.72401 1.72388C5.97407 1.47382 6.3132 1.33335 6.66683 1.33335H9.3335C9.68713 1.33335 10.0263 1.47382 10.2763 1.72388C10.5264 1.97394 10.6668 2.31307 10.6668 2.66669V4.00002M12.6668 4.00002V13.3334C12.6668 13.687 12.5264 14.0262 12.2763 14.2762C12.0263 14.5263 11.6871 14.6667 11.3335 14.6667H4.66683C4.3132 14.6667 3.97407 14.5263 3.72401 14.2762C3.47395 14.0262 3.3335 13.687 3.3335 13.3334V4.00002H12.6668Z" stroke="white" stroke-width="1.s5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        Excluir
                    </button>
                </div>
            </div>
        </section>
    </main>
    
    
  
@endsection
