<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RoutineMaker') }}</title>

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
<header class="l-header">
    <div class="sp__icon__container">
        <i class="fas fa-user sp__icon sp__icon--user"></i>
        <p class="sp__icon--text">USER</p>
    </div>

    <!-- SP用userメニューここから -->
    <div class="p-header__sp p-header__sp--left active">
        <div class="p-header__sp__icon__container p-header__sp__icon__container--left">
            <i class="fas fa-times p-header__sp__icon"></i>
            <p class="sp__icon--text">CLOSE</p>
        </div>
        <ul class="p-header__sp__menu p-header__sp__menu--left">
            <li class="p-header__sp__menu__list p-header__sp__menu__list--user">
                <p>account</p>
                <p><span>shimeji@kinkogumi.com</span></p>
            </li>
            <li class="p-header__sp__menu__list">
                <a href="">新規リスト作成</a>
            </li>
            <li class="p-header__sp__menu__list">
                <a href="">履歴を見る</a>
            </li>
            <li class="p-header__sp__menu__list">
                <a href="">ログアウト</a>
            </li>
        </ul>
    </div>
    <!-- SP用userメニューここまで -->

    <div class="logo">
        <h1><a href="index.html">RoutineMaker</a></h1>
    </div>

    <nav>
        <ul class="nav-menu">
            <li class="nav-menu__list"><a href="signin.html">ログイン</a></li>
            <li class="nav-menu__list">|</li>
            <li class="nav-menu__list"><a href="signup.html">新規登録</a></li>
        </ul>
    </nav>

    <div class="sp__icon__container">
        <i class="fas fa-info-circle  sp__icon sp__icon--info"></i>
        <p class="sp__icon--text">INFO</p>
    </div>


    <!-- SP用infoメニューここから -->
    <div class="p-header__sp p-header__sp--right">
        <div class="p-header__sp__icon__container p-header__sp__icon__container--right">
            <i class="fas fa-times p-header__sp__icon"></i>
            <p class="sp__icon--text">CLOSE</p>
        </div>
        <ul class="p-header__sp__menu p-header__sp__menu--right">
            <li class="p-header__sp__menu__list">
                <a href="">このアプリについて</a>
            </li>
            <li class="p-header__sp__menu__list">
                <a href="">プライバシーポリシー</a>
            </li>
            <li class="p-header__sp__menu__list">
                <a href="contact.html">お問い合わせ</a>
            </li>
        </ul>
    </div>
    <!-- SP用infoメニューここまで -->

</header>

<!-- content -->
@yield('content')
<!-- content end -->

<footer class="l-footer">
    <div class="copyright">
        <p>©Copyright2019 RoutineMaker.All Rights Reserved</p>
    </div>
    <div class="info">
        <ul class="footer-menu">
            <li class="footer-menu__list"><a href="">このアプリについて </a></li>
            <li class="footer-menu__list">|</li>
            <li class="footer-menu__list"><a href="">プライバシーポリシー</a></li>
            <li class="footer-menu__list">|</li>
            <li class="footer-menu__list">
                <a href="contact.html">お問い合わせ</a>
            </li>
        </ul>
    </div>
</footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
