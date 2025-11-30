@props(['title', 'description', 'image', 'link' => '#'])

<div class="card">
    <div class="img-card">
        <img src="{{ asset($image) }}" alt="{{ $title }}">
    </div>
    <div class="content-card">
        <h3 class="card-title">{{ $title }}</h3>
        <p class="card-description">{{ $description }}</p>
        <a class="card-link" href="{{ $link }}">Ver mais detalhes e reservar</a>
    </div>
</div>