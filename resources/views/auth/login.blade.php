@extends('layouts.app')

@section('content')
    <header-component></header-component>

    <main class="l-main l-main--base">
        <div class="l-main__inner">
            <div class="p-form__container">
                <h2 class="p-form__title">{{ __('Login') }}</h2>
                <!-- form start -->
                <div class="c-form__container">
                    <form method="POST" action="{{ route('login') }}"
                          class="c-form c-form--contact">
                    @csrf

                    <!-- エラーメッセージ表示欄ここから -->
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


                        <label for="email" class="c-form__label">
                            <input
                                id="email"
                                type="email"
                                name="email"
                                class="@error('email') invalid @enderror"
                                placeholder="{{ __('E-Mail Address') }}"
                                value="{{ old('email') }}" required
                                autocomplete="email" autofocus
                            />
                        </label>


                        <label class="c-form__label">
                            <input id="password" type="password" name="password"
                                   class="@error('password') invalid @enderror"
                                   placeholder="{{ __('Password') }}"
                                   required
                                   autocomplete="current-password"/>
                        </label>

                        <div class="c-form__label--check">
                            <label for="remember">
                                <input class="c-form--check"
                                       type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                            </label>
                        </div>


                        <!-- 通常ログインボタン -->
                        <input
                            type="submit"
                            class="c-btn c-btn__square--large c-btn--accent"
                            value="{{ __('Login') }}"
                        />
                    </form>


                    <!-- Twitterログインボタン -->
                    <a href="#"
                       class="c-btn c-btn__square--large c-btn--twitter">
                        <i class="fab fa-twitter"></i>
                        Twitterで登録/ログイン</a
                    >

                    <div class="p-form__text">
                        <p>パスワードを忘れた方は<a href="{{ route('password.request') }}">こちら</a>
                        </p>
                        <p>アカウントをお持ちで無い方はこちらから</p>
                    </div>


                    <!-- 新規登録 -->
                    <a href="register"
                       class="c-btn c-btn__square--large c-btn--base">
                        {{ __('Sign up') }}</a
                    >
                </div>
                <!-- form end -->
            </div>
        </div>
    </main>

    <footer-component></footer-component>
@endsection
