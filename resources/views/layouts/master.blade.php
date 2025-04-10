<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Farmington Nail Spa</title>
    <!-- Font Awesome cho icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Font Montserrat và Cookie từ Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Vite CSS với Tailwind -->
    @vite(['resources/css/app.css'])
    @yield('styles')
</head>
<body class="bg-white">
    @include('partials.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    
    
    <!-- Vite JS -->
    @vite(['resources/js/app.js'])
    @yield('scripts')
</body>
</html>