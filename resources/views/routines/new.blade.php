@extends('layouts.app')

@section('title','新規リスト登録')

@section('content')
    <header-component
        v-bind:authcheck="@auth true @endauth @guest false @endguest"
        v-bind:logout="'{{route('logout')}}'"
        v-bind:user="{{$user}}"></header-component>

    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-list__container">
                <h2 class="p-list__title">{{__('New List')}}</h2>
                <div class="p-list__text">
                    <p>{{__('*List Title and Task1 are required.')}}</p>
                    <p>{{__('*Max Task is 10, within 20 characters.')}}</p>
                </div>
                <!-- form start -->
                <div class="c-form__container">
                    <form action="{{ route('routines.create') }}" method="POST"
                          class="c-form c-form--list">
                    @csrf

                    <!-- エラーメッセージ表示欄ここから -->
                        @error('title')
                        <p class="c-form__err">{{ $message }}</p>
                        @enderror
                        @for($i=1; $i<=10; $i++)
                            @error('task'.($i-1))
                            <p class="c-form__err">{{ $message }}</p>
                            @enderror
                        @endfor
                    <!-- エラーメッセージ表示欄ここまで -->

                        <!-- タイトル -->
                        <label class="c-form__label c-form__label">
                            <input
                                id="title"
                                type="text"
                                name="title"
                                placeholder="{{__('List Title')}}"
                                value="{{ old('title') }}"
                                class="c-form--list__title @error('title') invalid @enderror"
                                required
                                autocomplete="title"
                                autofocus
                            />
                        </label>

                        <!-- タスク -->
                        @for($i=1; $i<=10; $i++)
                            <label for="task{{$i - 1}}" class="c-form__label">
                                <input
                                    id="task{{$i - 1}}"
                                    type="text"
                                    name="task{{$i - 1}}"
                                    placeholder="{{__('Task').$i}}"
                                    value="{{old('task'.($i-1))}}"
                                    autocomplete="task{{$i - 1}}"
                                />
                            </label>
                        @endfor

                        <div class="c-btn__group p-list__btn__group">
                            <input
                                value="{{ __('Back') }}"
                                onclick="history.back();" type="button"
                                class="c-btn c-btn__square--small c-btn__square--small--back c-btn--base"
                            />
                            <input
                                type="submit"
                                class="c-btn c-btn__square--small c-btn--accent"
                                value="{{__('Register')}}"
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
