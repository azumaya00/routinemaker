@extends('layouts.app')

@section('title','履歴')

@section('content')
    <header-component
        v-bind:authcheck="@auth true @endauth @guest false @endguest"
        v-bind:logout="'{{route('logout')}}'"
        v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-history__container">
                <!-- スマホ用メニューここから -->
                <div class="p-history__sp__menu">
                    <div class="p-history__sp__menu--left">
                        <a href="mypage" class="p-history__sp__link">{{__('My List')}}</a>
                    </div>
                    <div class="p-history__sp__menu--right">
                        <p class="p-history__sp__link">{{__('History')}}</p>
                    </div>
                </div>
                <!-- スマホ用メニューここまで -->
                <h2 class="p-history__title">{{__('History')}}</h2>

                <!-- アコーディオンここから -->
                <div class="c-accordion">
                    <!-- accordion component start -->

                    @foreach($histories as $history)

                    <div class="p-history__head">
                        <div class="p-history__head--left">
                            <ul class="p-history__list">
                                <li class="p-history__list__item">
                                    {{ date('Y年m月d日', strtotime($history -> started_at)) }}
                                </li>
                                <li class="p-history__list__item">
                                    {{ $history -> title }}
                                </li>
                            </ul>
                        </div>
                        <div class="p-history__head--right @if($history -> completion) completed @else incomplete @endif"></div>
                    </div>
                    <input
                        type="checkbox"
                        id="{{ $history ->id }}"
                        name=""
                        class="c-accordion__tab"
                    />
                    <label for="{{ $history ->id }}" class="c-accordion__label">詳しく見る</label>
                    <div class="c-accordion__content">
                        <ul class="p-history__list">
                            <li class="p-history__list__item">
                                かかった時間: {{date('G時間I分s秒', strtotime($history -> finished_at) - strtotime($history -> started_at))}}
                            </li>
                            <li class="p-history__list__item">
                                実行順:
                                <ol class="p-history__list--sub">
                                    @for($i=1; $i<=10; $i++)
                                        @php
                                            $task = 'task'.($i-1);
                                        @endphp
                                        @if(!($history -> $task))
                                            @continue
                                        @endif
                                        <li class="p-history__list__item--sub">
                                        {{ $history -> $task }}
                                    </li>
                                    @endfor
                                </ol>
                            </li>
                        </ul>
                    </div>

                    @endforeach
                    <!-- accordion component end -->
                </div>
                <!-- アコーディオンここまで -->

                <!-- ページネーションここから -->
            {{ $histories->links() }}
            <!-- ページネーションここまで -->

                <div class="p-history__btn__group">
                    <input value="{{ __('Back') }}" onclick="history.back();"
                           type="button"
                           class="c-btn c-btn__square--small c-btn--base">
                </div>
            </div>
        </div>
    </main>

    <floating-button-component></floating-button-component>
    <footer-component></footer-component>
@endsection
