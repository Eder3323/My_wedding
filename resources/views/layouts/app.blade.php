<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuestra Boda</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"/>
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap"/>
    </noscript>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/font-awesome/css/all.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/ekko-lightbox.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="  crossorigin="anonymous"></script>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.1.0"></script>
    <script src="scripts/aos.js?ver=1.1.0"></script>
    <script src="scripts/ekko-lightbox.min.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
    <script src="scripts/simplyCountdown.min.js"></script>
    <script src="scripts/simply_count.js" ></script>
    <script src="scripts/music.js" ></script>

</body>
</html>
