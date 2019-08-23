@extends('layouts.app')

@section('title','Contact')

@section('content')
    <header-component v-bind:authcheck="@auth true @endauth @guest false @endguest" v-bind:logout="'{{route('logout')}}'" v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base">
        <div class="l-main__inner">
            <div class="p-form__container">
                <h2 class="p-form__title">Contact</h2>
                <!-- form start -->
                <div class="c-form__container">
                    <form action="{{ route('contact.sent') }}" method="POST"
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


                        <label for="inquiry" class="c-form__label">
                  <textarea
                      name="inquiry"
                      cols="30"
                      rows="8"
                      placeholder="{{__('Inquiry(Max 2000 character)')}}"
                      value="{{ old('inquiry') }}"
                      class="@error('inquiry') invalid @enderror"
                      equired
                  ></textarea>
                        </label>


                        <div class="c-btn__group">
                            <input
                                value="{{ __('Back') }}" onclick="history.back();"
                                type="button"
                                class="c-btn c-btn__square--small c-btn__square--small--back c-btn--base"
                            />
                            <input
                                type="submit"
                                class="c-btn c-btn__square--small  c-btn--accent"
                                value="{{ __('Submit') }}"
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
