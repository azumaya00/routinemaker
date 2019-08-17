@extends('layouts.app')
@section('content')
    <header-component></header-component>

    <!-- ここからcontentにする -->
    <main class="l-main l-main--base">
        <div class="l-main__inner">
            <div class="p-form__container">
                <h2 class="p-form__title">Contact</h2>
                <!-- form start -->
                <div class="c-form__container">
                    <form action="" method="POST"
                          class="c-form c-form--contact">
                        <p class="c-form__err">名前を入力して下さい</p>
                        <label class="c-form__label">
                            <input type="text" name="name"
                                   placeholder="お名前(必須)"/>
                        </label>
                        <label class="c-form__label">
                            <input
                                type="text"
                                name="email"
                                placeholder="Eメールアドレス(必須)"
                            />
                        </label>
                        <label class="c-form__label">
                  <textarea
                      name="details"
                      cols="30"
                      rows="8"
                      placeholder="お問い合わせ内容(2000文字以内)"
                  ></textarea>
                        </label>
                        <div class="c-btn__group">
                            <input
                                type="submit"
                                class="c-btn c-btn__square--small  c-btn__square--small--back c-btn--base"
                                value="戻る"
                            />
                            <input
                                type="submit"
                                class="c-btn c-btn__square--small  c-btn--accent"
                                value="送信する"
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
