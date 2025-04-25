<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CDN for TailwindCSS, if needed for this version -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> <!-- Remove if not needed -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.css">


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">

    <title>Betel Saúde</title>
</head>
<body class="text-black bg-white">
    @include('layouts.partials.nav-dark')

    @yield('content')

    @include('layouts.partials.footer') 

    <script src="https://cdn.jsdelivr.net/npm/swiper@8.4.7/swiper-bundle.min.js"></script> <!-- Swiper JS -->

    <script>
        lucide.createIcons(); // Initialize Lucide icons
    </script>
</body>
</html>
