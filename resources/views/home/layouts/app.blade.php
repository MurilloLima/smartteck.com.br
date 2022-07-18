<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="{{ asset('home/assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/js/tt_slideshow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('home/assets/js/Customjs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/js/contactform.js') }}"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Smart Teck - @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('home/assets/css/bootstrap.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}" type="text/css" media="screen" />
    <!--[if lte IE 8]>
    <link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
    <link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('home/assets/js/totop.js') }}"></script>
    <!--[if IE 7]>
    <style type="text/css" media="screen">
    #ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
    </style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="html5shiv.js"></script>
    <script type="text/javascript" src="respond.min.js"></script>
    <![endif]-->

</head>

<body class="Home">
    <div>
        @include('home.inc.header')
        @include('home.inc.nav')
        @yield('content')
        @include('home.inc.footer')
    </div>

    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans', 'Open+Sans:700']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

</body>

</html>
