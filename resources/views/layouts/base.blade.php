<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN (desenvolvimento, não recomendado para produção) -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <title>Betel Saúde</title>

    <!-- Ícones (Lucide, se for usar) -->
    <script src="https://unpkg.com/lucide@latest"></script>

    
</head>
<body class="text-black bg-white">
    @include('layouts.partials.nav-dark')

    @yield('content')

    @include('layouts.partials.footer') 

    <script>
        lucide.createIcons(); // Ativa os ícones Lucide após o DOM carregar
    </script>
</body>
</html>
