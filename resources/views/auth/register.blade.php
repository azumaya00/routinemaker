@extends('layouts.app')

@section('title','Sign up')

@section('content')
    <header-component v-bind:authcheck="false" v-bind:logout="'{{route('logout')}}'" v-bind:user="undefined"></header-component>

    <main class="l-main l-main--base">
        <div class="l-main__inner">
            <div class="p-form__container">
                <h2 class="p-form__title">Sign up</h2>
                <!-- form start -->
                <div class="c-form__container">
                    <form method="POST" action="{{ route('register') }}"
                          class="c-form c-form--contact">
                    @csrf

                    <!-- エラーメッセージ表示欄ここから -->
                        @error('name')
                        <p class="c-form__err">
                            {{ $message }}
                        </p>
                        @enderror
                        @error('email')
                        <p class="c-form__err">
                            {{ $message }}
                        </p>
                        @enderror
                        @error('password')
                        <p class="c-form__err">
                            {{ $message }}
                        </p>
                    @enderror
                    <!-- エラーメッセージ表示欄ここまで -->

                        <label for="name" class="c-form__label">
                            <input id="name"
                                   type="text"
                                   name="name"
                                   class=" @error('name') invalid @enderror"
                                   placeholder="{{ __('Name') }}"
                                   value="{{ old('name') }}" required
                                   autocomplete="name" autofocus>
                        </label>

                        <label for="email" class="c-form__label">
                            <input id="email" type="email" name="email"
                                   class="@error('email') invalid @enderror"
                                   placeholder="{{ __('E-Mail Address') }}"
                                   value="{{ old('email') }}" required
                                   autocomplete="email"
                            />
                        </label>

                        <label for="password" class="c-form__label">
                            <input id="password"
                                   type="password"
                                   name="password"
                                   placeholder="{{ __('Password') }}"
                                   class="@error('password') invalid @enderror"
                                   name="password" required
                                   autocomplete="new-password"/>
                        </label>


                        <label for="password-confirm" class="c-form__label">
                            <input id="password-confirm" type="password"
                                   name="password_confirmation"
                                   placeholder="{{ __('Confirm Password') }}"
                                   required autocomplete="new-password"
                            />
                        </label>

                        <!-- 新規会員登録ボタン -->
                        <input
                            type="submit"
                            class="c-btn c-btn__square--large c-btn--accent"
                            value=" {{ __('Register') }}"
                        />
                    </form>

                    <div class="p-form__text">
                        <p>Twitterアカウントでも登録できます</p>
                    </div>

                    <!-- Twitterログインボタン -->
                    <a href="#"
                       class="c-btn c-btn__square--large c-btn--twitter">
                        <i class="fab fa-twitter"></i>
                        Twitterで登録/ログイン</a
                    >
                </div>
                <!-- form end -->
            </div>
        </div>
    </main>

    <footer-component></footer-component>
@endsection
