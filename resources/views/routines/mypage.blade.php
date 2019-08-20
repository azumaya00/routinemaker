@extends('layouts.app')

@section('title','マイページ')

@section('content')
    <header-component v-bind:authcheck="@auth true @endauth @guest false @endguest" v-bind:logout="'{{route('logout')}}'" v-bind:user="{{$user}}"></header-component>
    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-mypage__container">
                <!-- スマホ用メニューここから -->
                <div class="p-mypage__sp__menu">
                    <div class="p-mypage__sp__menu--left">
                        <p class="p-mypage__sp__link">{{__('My List')}}</p>
                    </div>
                    <div class="p-mypage__sp__menu--right">
                        <a href="{{route('histories.show')}}"
                           class="p-mypage__sp__link">{{__('History')}}</a>
                    </div>
                </div>
                <!-- スマホ用メニューここまで -->

                <h2 class="p-mypage__title">新規リスト作成</h2>

                <p class="p-mypage__text">リストは5個まで作成出来ます</p>
                <div class="p-mypage__btn__group">
                    <a href="{{route('routines.new')}}" class="c-btn c-btn__square--small c-btn--accent"
                    >新規作成</a
                    >
                </div>

                <h2 class="p-mypage__title">登録済みリスト</h2>

                <!-- リストここから -->
                <ul class="p-mypage__list">

                    @foreach($routines as $routine)
                    <li class="p-mypage__list__item">
                        <a href="{{route('routines.prepare', $routine -> id)}}"  class="p-mypage__list__item--left">
                                {{ $routine -> title }}
                        </a>
                        <div class="p-mypage__list__item--right">
                            <a href="{{ route('routines.edit', $routine -> id) }}"><i
                                    class="fas fa-edit p-mypage__icon"></i></a>
                            <form action="{{route('routines.delete', $routine -> id)}}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="p-mypage__btn--delete" onclick='return confirm("{{__('Do you really delete it?')}}")'><i class="fas fa-trash-alt p-mypage__icon"></i></button>
                            </form>
                        </div>
                    </li>
                    @endforeach

                </ul>
                <!-- リストここまで -->

                <div class="p-mypage__btn__group">
                    <a href="{{route('histories.show')}}" class="c-btn c-btn__square--small c-btn--base"
                    >履歴を見る</a
                    >
                </div>
            </div>
        </div>
    </main>

    <floating-button-component></floating-button-component>
    <footer-component></footer-component>
@endsection
