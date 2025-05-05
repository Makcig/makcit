<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title and Meta -->
    <title>@yield('title', 'MAKC IT - Personal Portfolio Website')</title>
    <meta name="description" content="MAKC IT is a personal portfolio website showcasing skills, projects, and experience in web development. Built with Laravel, it features a dynamic admin panel, responsive design, and modern technologies.">
    <meta name="keywords" content="portfolio, web development, Laravel, PHP, Bootstrap, responsive design, personal website">
    <meta name="author" content="MAKC IT">
    <meta property="og:title" content="MAKC IT - Personal Portfolio Website">
    <meta property="og:description" content="Explore the personal portfolio of MAKC IT, featuring projects, skills, and a dynamic admin panel. Built with Laravel and modern web technologies.">
    <meta property="og:image" content="{{ asset('public/images/og-image.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MAKC IT - Personal Portfolio Website">
    <meta name="twitter:description" content="Explore the personal portfolio of MAKC IT, featuring projects, skills, and a dynamic admin panel. Built with Laravel and modern web technologies.">
    <meta name="twitter:image" content="{{ asset('public/images/og-image.png') }}">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('public/favicon/site.webmanifest') }}">

    <!-- Styles and Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('public/css/custom.css') }}?v=1.0" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeXcHEqAAAAAAJ-o1ynEqaRKUVkTQ4yT4SVP7Op"></script>
    <script src="{{ asset('public/js/app.js') }}" defer></script>
</head>

<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show custom-alert m-3" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('scripts')

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
