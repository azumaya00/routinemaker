<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146433033-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146433033-1');
    </script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Home') | Routinemaker</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Noto+Sans+JP:400,700&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
        crossorigin="anonymous"
    />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- OGP設定 start -->
    <meta property="og:title" content="RoutineMaker">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://routinemaker.yuruknowledge-labo.com/">
    <meta property="og:image" content="{{ asset('images/ogp.jpg') }}">
    <meta property="og:site_name" content="Yuruknowledge Labo">
    <meta property="og:description" content="やることが多くてパニックになる！すぐ気が散ってやることを放り出す！そんな子供のためのタスク実行補助アプリです">
    <meta name="twitter:card" content="summary_large_image">
    <!-- OGP設定 end -->

</head>
<body>
<div id="app" class="wrapper--main" v-cloak>


    <!-- content -->
@yield('content')
<!-- content end -->

    <!-- フラッシュメッセージここから -->
    @if (session('scc_message'))
        <div class="p-message__container p-message__container--success" v-bind:class="{'is-active': isActive}">
            <i class="fas fa-check-circle p-message__icon"></i>
            <div class="p-message__text">
                <p >{{session('scc_message')}}</p>
            </div>
        </div>
@endif
    @if (session('err_message'))
        <div class="p-message__container p-message__container--error" v-bind:class="{'is-active': isActive}">
            <i class="fas fa-exclamation-circle p-message__icon"></i>
            <div class="p-message__text">
                <p >{{session('err_message')}}</p>
            </div>
        </div>
@endif
<!-- フラッシュメッセージここまで -->
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
