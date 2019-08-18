<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

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

</head>
<body>
<div id="app" class="wrapper--main">


    <!-- content -->
@yield('content')
<!-- content end -->

    <!-- フラッシュメッセージここから -->
    @if (session('flash_message'))
        <div class="p-message__container" v-bind:class="{'is-active': isActive}">
            <i class="far fa-check-circle p-message__icon"></i>
            <p class="p-message__text">{{session('flash_message')}}</p>
        </div>
@endif
<!-- フラッシュメッセージここまで -->
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
