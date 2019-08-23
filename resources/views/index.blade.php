@extends('layouts.app')

@section('title','Home')

@section('content')
    <header-component v-bind:authcheck="@auth true @endauth @guest false @endguest" v-bind:logout="'{{route('logout')}}'" v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base">
        <section class="l-hero">
            <div class="p-hero__container">
                <p class="p-hero__copy--sub">
                    「今日もやること多くてパニック状態！」
                </p>
                <p class="p-hero__copy">ｱﾜ((ﾟﾟддﾟﾟ ))ﾜﾜ!!</p>
                <p class="p-hero__text">
                    そんな子供のために母ちゃんが考えた<br/>タスク自主管理支援アプリです。
                </p>
                <div class="c-btn__group p-hero__btn__group">
                    <a href="{{route('register')}}"
                       class="c-btn c-btn__square--flexible c-btn--accent p-hero__btn"
                    >新規会員登録</a
                    >
                    <a href="/login/twitter"
                       class="c-btn c-btn__square--flexible c-btn--twitter p-hero__btn">
                        <i class="fab fa-twitter"></i> Twitterで登録/ログイン</a
                    >
                </div>
            </div>
        </section>
        <section class="l-user">
            <div class="p-user__container">
                <p class="p-user__text">既に会員の方はこちら</p>
                <a href="{{route('login')}}"
                   class="c-btn c-btn__square--flexible c-btn--base p-user__btn">
                    ログイン</a
                >
            </div>
        </section>
    </main>

    <footer-component></footer-component>
@endsection
