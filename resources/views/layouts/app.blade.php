<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Politeknik Caltex Riau')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @stack('styles')
    @include('partials.styles')
</head>
<body>
    @include('layouts.navbar')
    
    <a href="#" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>