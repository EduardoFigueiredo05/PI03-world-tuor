@props(['href' => '#', 'variant' => 'primary', 'type' => 'a'])

@php
    $baseClass = "button";
    $variants = [
        'primary' => 'button--primary',
        'danger' => 'button--danger',
        'full' => 'button--full', // Se houver
    ];
    
    // Junta a classe base com a variante
    $class = $baseClass . ' ' . ($variants[$variant] ?? '');
@endphp

@if($type === 'a')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </button>
@endif