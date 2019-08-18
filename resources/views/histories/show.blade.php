@extends('layouts.app')

@section('title','履歴')

@section('content')
    <header-component v-bind:authcheck="@auth true @endauth @guest false @endguest" v-bind:logout="'{{route('logout')}}'" v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-history__container">
                <!-- スマホ用メニューここから -->
                <div class="p-history__sp__menu">
                    <div class="p-history__sp__menu--left">
                        <a href="mypage" class="p-history__sp__link">マイリスト</a>
                    </div>
                    <div class="p-history__sp__menu--right">
                        <p class="p-history__sp__link">履歴</p>
                    </div>
                </div>
                <!-- スマホ用メニューここまで -->
                <h2 class="p-history__title">実行履歴</h2>

                <!-- アコーディオンここから -->
                <div class="c-accordion">
                    <!-- accordion component start -->
                    <div class="p-history__head">
                        <div class="p-history__head--left">
                            <ul class="p-history__list">
                                <li class="p-history__list__item">
                                    8月15日
                                </li>
                                <li class="p-history__list__item">
                                    リストタイトルがとっても長くなったやつ
                                </li>
                            </ul>
                        </div>
                        <div class="p-history__head--right completed"></div>
                    </div>
                    <input
                        type="checkbox"
                        id="his1"
                        name=""
                        class="c-accordion__tab"
                    />
                    <label for="his1" class="c-accordion__label">詳しく見る</label>
                    <div class="c-accordion__content">
                        <ul class="p-history__list">
                            <li class="p-history__list__item">
                                かかった時間: 2時間30分
                            </li>
                            <li class="p-history__list__item">
                                実行順:
                                <ol class="p-history__list--sub">
                                    <li class="p-history__list__item--sub">
                                        数学の問題
                                    </li>
                                    <li class="p-history__list__item--sub">
                                        科学の本
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <!-- accordion component end -->
                    <!-- accordion component start -->
                    <div class="p-history__head">
                        <div class="p-history__head--left">
                            <ul class="p-history__list">
                                <li class="p-history__list__item">
                                    8月15日
                                </li>
                                <li class="p-history__list__item">
                                    Todoリストタイトル
                                </li>
                            </ul>
                        </div>
                        <div class="p-history__head--right completed"></div>
                    </div>
                    <input
                        type="checkbox"
                        id="his2"
                        name=""
                        class="c-accordion__tab"
                    />
                    <label for="his2" class="c-accordion__label">詳しく見る</label>
                    <div class="c-accordion__content">
                        <ul class="p-history__list">
                            <li class="p-history__list__item">
                                かかった時間: 2時間30分
                            </li>
                            <li class="p-history__list__item">
                                実行順:
                                <ol class="p-history__list--sub">
                                    <li class="p-history__list__item--sub">
                                        数学の問題
                                    </li>
                                    <li class="p-history__list__item--sub">
                                        科学の本
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <!-- accordion component end -->
                    <!-- accordion component start -->
                    <div class="p-history__head">
                        <div class="p-history__head--left">
                            <ul class="p-history__list">
                                <li class="p-history__list__item">
                                    8月15日
                                </li>
                                <li class="p-history__list__item">
                                    Todoリストタイトル
                                </li>
                            </ul>
                        </div>
                        <div class="p-history__head--right completed"></div>
                    </div>
                    <input
                        type="checkbox"
                        id="his3"
                        name=""
                        class="c-accordion__tab"
                    />
                    <label for="his3" class="c-accordion__label">詳しく見る</label>
                    <div class="c-accordion__content">
                        <ul class="p-history__list">
                            <li class="p-history__list__item">
                                かかった時間: 2時間30分
                            </li>
                            <li class="p-history__list__item">
                                実行順:
                                <ol class="p-history__list--sub">
                                    <li class="p-history__list__item--sub">
                                        数学の問題
                                    </li>
                                    <li class="p-history__list__item--sub">
                                        科学の本
                                    </li>
                                    <li class="p-history__list__item--sub">
                                        ご飯作る
                                    </li>
                                    <li class="p-history__list__item--sub">
                                        洗い物
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <!-- accordion component end -->
                    <!-- accordion component start -->
                    <div class="p-history__head">
                        <div class="p-history__head--left">
                            <ul class="p-history__list">
                                <li class="p-history__list__item">
                                    8月15日
                                </li>
                                <li class="p-history__list__item">
                                    Todoリストタイトル
                                </li>
                            </ul>
                        </div>
                        <div class="p-history__head--right incomplete"></div>
                    </div>
                    <input
                        type="checkbox"
                        id="his4"
                        name=""
                        class="c-accordion__tab"
                    />
                    <label for="his4" class="c-accordion__label">詳しく見る</label>
                    <div class="c-accordion__content">
                        <ul class="p-history__list">
                            <li class="p-history__list__item">
                                かかった時間: 2時間30分
                            </li>
                            <li class="p-history__list__item">
                                実行順:
                                <ol class="p-history__list--sub">
                                    <li class="p-history__list__item--sub">
                                        数学の問題
                                    </li>
                                    <li class="p-history__list__item--sub">
                                        科学の本
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <!-- accordion component end -->
                    <!-- accordion component start -->
                    <div class="p-history__head">
                        <div class="p-history__head--left">
                            <ul class="p-history__list">
                                <li class="p-history__list__item">
                                    8月15日
                                </li>
                                <li class="p-history__list__item">
                                    Todoリストタイトル
                                </li>
                            </ul>
                        </div>
                        <div class="p-history__head--right completed"></div>
                    </div>
                    <input
                        type="checkbox"
                        id="his5"
                        name=""
                        class="c-accordion__tab"
                    />
                    <label for="his5" class="c-accordion__label">詳しく見る</label>
                    <div class="c-accordion__content">
                        <ul class="p-history__list">
                            <li class="p-history__list__item">
                                かかった時間: 2時間30分
                            </li>
                            <li class="p-history__list__item">
                                実行順:
                                <ol class="p-history__list--sub">
                                    <li class="p-history__list__item--sub">
                                        数学の問題
                                    </li>
                                    <li class="p-history__list__item--sub">
                                        科学の本
                                    </li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                    <!-- accordion component end -->
                </div>
                <!-- アコーディオンここまで -->

                <div class="p-history__btn__group">
                    <input value="{{ __('Back') }}" onclick="history.back();" type="button" class="c-btn c-btn__square--small c-btn--base">
                </div>
            </div>
        </div>
    </main>

    <floating-button-component></floating-button-component>
    <footer-component></footer-component>
@endsection
