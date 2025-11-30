@extends('layouts.master')

@section('title', 'Início')

@section('content')

    <x-organisms.header-home />

    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Descubra o Mundo com a World Tuor</h1>
            <p class="hero-subtitle">
                Explore destinos incríveis e viva experiências inesquecíveis. Na World Tuor, 
                sua próxima grande aventura começa com uma simples reserva.
            </p>                
            <a href="{{ route('pacotes.index') }}" class="button button--primary">Ver Pacotes</a>
        </div>
    </section>
    
    <section class="features-section">
        <h2 class="features-title">POR QUE RESERVAR COM A WORLD TUOR</h2>
        <div class="features-grid">
            <div class="feature-item">
                <h3 class="feature-item__title">Destinos Selecionados</h3>
                <p class="feature-item__text">Nossos especialistas escolheram a dedo os melhores roteiros.</p>
            </div>
            <div class="feature-item">
                <h3 class="feature-item__title">Reserva Fácil</h3>
                <p class="feature-item__text">Sem burocracia. Nosso sistema é simples e rápido.</p>
            </div>
            <div class="feature-item">
                <h3 class="feature-item__title">Viva a Experiência</h3>
                <p class="feature-item__text">Crie memórias inesquecíveis hoje mesmo.</p>
            </div>
        </div>
    </section>

    <x-organisms.footer />

@endsection