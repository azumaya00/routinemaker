@extends('layouts.app')

@section('title','リスト編集')

@section('content')
    <header-component v-bind:authcheck="@auth true @endauth @guest false @endguest" v-bind:logout="'{{route('logout')}}'" v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-list__container">
                <h2 class="p-list__title">リストの編集</h2>
                <div class="p-list__text">
                    <p>※タイトルとタスク1は必須です。</p>
                    <p>※タスクは10個まで、20文字以内で入力して下さい。</p>
                </div>
                <!-- form start -->
                <div class="c-form__container">
                    <form action="" method="POST" class="c-form c-form--list">
                        <p class="c-form__err">タイトルは必須です。</p>
                        <label class="c-form__label c-form__label">
                            <input
                                type="text"
                                name="title"
                                placeholder="リストタイトル"
                                class="c-form--list__title"
                                required
                            />
                        </label>
                        <label class="c-form__label">
                            <input
                                type="text"
                                name="title"
                                placeholder="タスク1"
                                required
                            />
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク2"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク3"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク4"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク5"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク6"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク7"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク8"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title" placeholder="タスク9"/>
                        </label>
                        <label class="c-form__label">
                            <input type="text" name="title"
                                   placeholder="タスク10"/>
                        </label>

                        <div class="c-btn__group p-list__btn__group">
                            <input
                                value="{{ __('Back') }}" onclick="history.back();" type="button"
                                class="c-btn c-btn__square--small c-btn__square--small--back c-btn--base"
                            />
                            <input
                                type="submit"
                                class="c-btn c-btn__square--small c-btn--accent"
                                value="登録する"
                            />
                        </div>
                    </form>
                </div>
                <!-- form end -->
            </div>
        </div>
    </main>

    <footer-component></footer-component>
@endsection
