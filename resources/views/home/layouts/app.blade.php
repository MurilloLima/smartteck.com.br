<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <meta name="title" content="Murillo Lima - Portfolio - Desenvolvedor Full Stack">

    <title>Murillo Lima - Programador Full Stack</title>

    {{-- icon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/home/images/perfil-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/home/images/perfil-icon.png') }}" />
    <meta property="og:image" content="{{ asset('assets/home/images/perfil-icon.png') }}">
    <meta name="twitter:image" content="{{ asset('assets/home/images/perfil-icon.png') }}">

    <meta name="author" content="Murillo Lima">
    <meta name="keywords"
        content="Murillo Lima, web designer, desenvolvedor, programador, front-end, back-end, fullstack, mobile, developer">
    <meta name="description" content="Desenvolvedor Full-stack">

    <meta name="robots" content="index, follow">
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="copyright" content="© 2022 Murillo Lima" />
    <meta name="rating" content="general" />

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- facebook share tags
 ================================================== -->
    <meta property="og:url" content="https://murillolimadev.com.br" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Murillo Lima - Portfolio" />
    <meta property="og:description" content="Desenvolvedor full-stack" />
    <meta property="og:image" content="https://murillolimadev.com.br/assets/home/images/perfil.png" />
    <meta property="og:site_name" content="Murillo Lima - Portfolio" />


    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/home/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/home/css/vendor.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- script
   ================================================== -->
    <script src="{{ asset('assets/home/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/home/js/pace.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/e3ee297768.js" crossorigin="anonymous"></script>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VJTHF94GT4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VJTHF94GT4');
    </script>
    <!-- End Google Analytics -->

    <!-- favicons
 ================================================== -->
    <link rel="icon" type="{{ asset('assets/home/image/png') }}" href="{{ asset('ssets/home/favicon.png') }}">

</head>

<body id="top">
    @include('home.inc.nav')
    @yield('content')
    @include('home.inc.footer')
    <!-- Java Script
   ================================================== -->
    <script src="{{ asset('assets/home/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/home/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/home/js/main.js') }}"></script>
    <script src="{{ asset('assets/home/js/contact.js') }}"></script>

</body>

</html>
