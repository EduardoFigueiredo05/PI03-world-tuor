<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title') - World Tuor</title>

    {{-- CSS e JS via Vite --}}
    @vite([
        'resources/css/main.css',
        'resources/js/app.js'
    ])


</head>

<body>

    {{-- HEADER --}}
    @include('components.organisms.header')

    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('components.organisms.footer')

   

    {{-- POPUP LOGIN --}}
    @include('components.organisms.popup-login')
</body>
</html>
