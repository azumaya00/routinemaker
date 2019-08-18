@extends('layouts.app')

@section('title','Reset Password')

@section('content')
    <header-component v-bind:authcheck="false"
                      v-bind:logout="'{{route('logout')}}'"
                      v-bind:user="undefined"></header-component>

    <main class="l-main l-main--base">
        <div class="l-main__inner">
            <div class="p-form__container">
                <h2 class="p-form__title">{{ __('Reset Password') }}</h2>
                <div class="p-form__text">
                    <p>パスワードリセット用のリンクを送信します</p>
                </div>

                @if (session('status'))
                    <p class="c-form__err">
                        {{ session('status') }}
                    </p>
            @endif

            <!-- form start -->
                <div class="c-form__container">
                    <form method="POST" action="{{ route('password.email') }}"
                          class="c-form c-form--contact">
                    @csrf

                    <!-- エラーメッセージ表示欄ここから -->
                        @error('email')
                        <p class="c-form__err">
                            {{ $message }}
                        </p>
                    @enderror
                    <!-- エラーメッセージ表示欄ここまで -->


                        <label for="email" class="c-form__label">
                            <input id="email" type="email" name="email"
                                   class="@error('email') invalid @enderror"
                                   placeholder="{{ __('E-Mail Address') }}"
                                   value="{{ old('email') }}" required
                                   autocomplete="email"
                            />
                        </label>

                        <!-- 送信ボタン -->
                        <input
                            type="submit"
                            class="c-btn c-btn__square--large c-btn--accent"
                            value="  {{ __('Send Password Reset Link') }}"
                        />
                    </form>


                </div>
                <!-- form end -->
            </div>
        </div>
    </main>

    <footer-component></footer-component>
@endsection
