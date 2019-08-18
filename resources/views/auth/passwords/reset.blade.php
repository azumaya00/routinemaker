@extends('layouts.app')

@section('title','Reset Password')

@section('content')
    <header-component v-bind:authcheck="false"
                      v-bind:logout="'{{route('logout')}}'"v-bind:user="undefined"></header-component>

    <main class="l-main l-main--base">
        <div class="l-main__inner">
            <div class="p-form__container">
                <h2 class="p-form__title">{{ __('Reset Password') }}</h2>
                <!-- form start -->
                <div class="c-form__container">
                    <form method="POST" action="{{ route('password.update') }}"
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

                        <input type="hidden" name="token" value="{{ $token }}">

                        <label for="email" class="c-form__label">
                            <input id="email" type="email" name="email"
                                   class="@error('email') invalid @enderror"
                                   placeholder="{{ __('E-Mail Address') }}"
                                   value="{{ $email ?? old('email') }}" required
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

                        <!-- 登録ボタン -->
                        <input
                            type="submit"
                            class="c-btn c-btn__square--large c-btn--accent"
                            value=" {{ __('Reset Password') }}"
                        />
                    </form>


                </div>
                <!-- form end -->
            </div>
        </div>
    </main>

    <footer-component></footer-component>

@endsection
