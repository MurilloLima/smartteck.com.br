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
    <title>SAAE ESTREITO-MA</title>
    <link rel="stylesheet" href="{{ asset('home/assets/css/bootstrap.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}" type="text/css" media="screen" />

    <link rel="shortcut icon" href="{{ asset('home/assets/images/icon.png') }}" type="image/x-icon">

    <!--[if lte IE 8]>
    <link rel="stylesheet"  href="{{ asset('home/assets/css/menuie.css') }}" type="text/css" media="screen"/>
    <link rel="stylesheet"  href="{{ asset('home/assets/css/vmenuie.css') }}" type="text/css" media="screen"/>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('home/assets/js/totop.js') }}"></script>

    <!-- Start WOWSlider.com HEAD section -->
    <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/assets/slider/engine1/style.css') }}" />
    <script type="text/javascript" src="{{ asset('home/assets/slider/engine1/jquery.js') }}"></script>
    <!-- End WOWSlider.com HEAD section -->

    <!--[if IE 7]>
    <style type="text/css" media="screen">
    #ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
    </style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{ asset('home/assets/js/html5shiv.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/js/respond.min.js') }}"></script>
    <![endif]-->
    <style>
        .instuction {
            font-family: sans-serif, Arial;
            display: block;
            margin: 0 auto;
            max-width: 820px;
            width: 100%;
            padding: 0 70px;
            color: #222;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .instuction h1 img {
            max-width: 170px;
            vertical-align: middle;
            margin-bottom: 10px;
        }

        .instuction h1 {
            color: #2F98B3;
            text-align: center;
        }

        .instuction h2 {
            position: relative;
            font-size: 1.1em;
            color: #2F98B3;
            margin-bottom: 20px;
            margin-top: 40px;
        }

        .instuction h2 span.num {
            position: absolute;
            left: -70px;
            top: -18px;
            display: inline-block;
            vertical-align: middle;
            font-style: italic;
            font-size: 1.1em;
            width: 60px;
            height: 60px;
            line-height: 60px;
            text-align: center;
            background: #2F98B3;
            color: #fff;
            border-radius: 50%;
        }

        .instuction .mono {
            color: #000;
            font-family: monospace;
            font-size: 1.3em;
            font-weight: normal;
        }

        .instuction li.mono {
            font-size: 1.5em;
        }

        .instuction ul {
            font-size: 0.9em;
            margin-top: 0;
            padding-left: 0;
            list-style: none;
        }

        .instuction .note {
            color: #A3A3B2;
            font-style: italic;
            padding-top: 10px;
        }

        .instuction p.note {
            text-align: center;
            padding-top: 0;
            margin-top: 4px;
        }

        .instuction textarea {
            font-size: 0.9em;
            min-height: 60px;
            padding: 10px;
            margin: 0;
            overflow: auto;
            max-width: 100%;
            width: 100%;
        }

        .instuction a,
        .instuction a:visited {
            color: #2F98B3;
        }
    </style>

</head>

@yield('content')

</html>
