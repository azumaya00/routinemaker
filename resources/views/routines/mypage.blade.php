@extends('layouts.app')
@section('content')
    <header-component v-bind:authcheck="@auth true @endauth @guest false @endguest" v-bind:logout="'{{route('logout')}}'"></header-component>

    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-mypage__container">
                <!-- スマホ用メニューここから -->
                <div class="p-mypage__sp__menu">
                    <div class="p-mypage__sp__menu--left">
                        <p class="p-mypage__sp__link">マイリスト</p>
                    </div>
                    <div class="p-mypage__sp__menu--right">
                        <a href="{{route('histories.show')}}"
                           class="p-mypage__sp__link">履歴</a>
                    </div>
                </div>
                <!-- スマホ用メニューここまで -->

                <h2 class="p-mypage__title">新規リスト作成</h2>

                <p class="p-mypage__text">リストは5個まで作成出来ます</p>
                <div class="p-mypage__btn__group">
                    <a href="#" class="c-btn c-btn__square--small c-btn--accent"
                    >新規作成</a
                    >
                </div>

                <h2 class="p-mypage__title">登録済みリスト</h2>

                <!-- リストここから -->
                <ul class="p-mypage__list">
                    <li class="p-mypage__list__item">
                        <div class="p-mypage__list__item--left">
                            Todoリストタイトル
                        </div>
                        <div class="p-mypage__list__item--right">
                            <a href="#"><i
                                    class="fas fa-edit p-mypage__icon"></i></a>
                            <i class="fas fa-trash-alt p-mypage__icon"></i>
                        </div>
                    </li>
                    <li class="p-mypage__list__item">
                        <div class="p-mypage__list__item--left">
                            Todoリストタイトル
                        </div>
                        <div class="p-mypage__list__item--right">
                            <a href="#"><i
                                    class="fas fa-edit p-mypage__icon"></i></a>
                            <i class="fas fa-trash-alt p-mypage__icon"></i>
                        </div>
                    </li>
                    <li class="p-mypage__list__item">
                        <div class="p-mypage__list__item--left">
                            Todoリストタイトル
                        </div>
                        <div class="p-mypage__list__item--right">
                            <a href="#"><i
                                    class="fas fa-edit p-mypage__icon"></i></a>
                            <i class="fas fa-trash-alt p-mypage__icon"></i>
                        </div>
                    </li>
                    <li class="p-mypage__list__item">
                        <div class="p-mypage__list__item--left">
                            リストタイトルがとっても長くなったやつ
                        </div>
                        <div class="p-mypage__list__item--right">
                            <a href="#"><i
                                    class="fas fa-edit p-mypage__icon"></i></a>
                            <i class="fas fa-trash-alt p-mypage__icon"></i>
                        </div>
                    </li>
                    <li class="p-mypage__list__item">
                        <div class="p-mypage__list__item--left">
                            Todoリストタイトル
                        </div>
                        <div class="p-mypage__list__item--right">
                            <a href="#"><i
                                    class="fas fa-edit p-mypage__icon"></i></a>
                            <i class="fas fa-trash-alt p-mypage__icon"></i>
                        </div>
                    </li>
                </ul>
                <!-- リストここまで -->

                <div class="p-mypage__btn__group">
                    <a href="#" class="c-btn c-btn__square--small c-btn--base"
                    >履歴を見る</a
                    >
                </div>
            </div>
        </div>
    </main>

    <floating-button-component></floating-button-component>
    <footer-component></footer-component>
@endsection
