<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dadan Nurmaulana">

    <title>{{ $title ?? 'Putra Pantura - Informasi Digital Terkini' }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

    <!-- Custom styles for this template -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/navbar-fixed.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

</head>

<body>

    {{-- Navbar --}}
    @include('layout.navbar')

    {{-- Content --}}
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
        @include('layout.footer')
    </main>


</body>

{{-- JS --}}
<script src="/js/bootstrap.bundle.min.js"></script>

</html>
