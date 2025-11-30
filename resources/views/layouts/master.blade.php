<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Tour - @yield('title', 'Home')</title>
    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    
    <main>
        @yield('content')
    </main>

    <x-organisms.popup-profile />

    @stack('scripts')
</body>
</html>