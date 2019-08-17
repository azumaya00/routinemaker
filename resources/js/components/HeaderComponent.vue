<template>
    <header class="l-header">
        <div class="sp__icon__container" v-on:click="toggleLeftMenu">
            <i class="fas fa-user sp__icon sp__icon--user"></i>
            <p class="sp__icon--text">USER</p>
        </div>

        <!-- SP用userメニューここから -->
        <div class="p-header__sp p-header__sp--left" v-bind:class="{'active' : isActiveLeft}">
            <div
                class="p-header__sp__icon__container p-header__sp__icon__container--left" v-on:click="toggleLeftMenu">
                <i class="fas fa-times p-header__sp__icon"></i>
                <p class="sp__icon--text">CLOSE</p>
            </div>
            <ul class="p-header__sp__menu p-header__sp__menu--left">
                <li class="p-header__sp__menu__list p-header__sp__menu__list--user">
                    <p>account</p>
                    <p><span>shimeji@kinkogumi.com</span></p>
                </li>
                <li class="p-header__sp__menu__list">
                    <a href="">新規リスト作成</a>
                </li>
                <li class="p-header__sp__menu__list">
                    <a href="">履歴を見る</a>
                </li>
                <li class="p-header__sp__menu__list">
                    <a href="">ログアウト</a>
                </li>
            </ul>
        </div>
        <!-- SP用userメニューここまで -->

        <div class="logo">
            <h1><a href="/">RoutineMaker</a></h1>
        </div>

        <nav>
            <ul class="nav-menu" v-if="this.authcheck">
                <li class="nav-menu__list"><a href="/mypage">マイページ</a></li>
                <li class="nav-menu__list">|</li>
                <li class="nav-menu__list"><a href="/history">履歴を見る</a></li>
                <li class="nav-menu__list">|</li>
                <li class="nav-menu__list" v-on:click="doLogout"><p>ログアウト</p>
                </li>
            </ul>
            <ul class="nav-menu" v-else>
                <li class="nav-menu__list"><a href="/login">ログイン</a></li>
                <li class="nav-menu__list">|</li>
                <li class="nav-menu__list"><a href="/register">新規登録</a></li>
            </ul>
        </nav>

        <div class="sp__icon__container" v-on:click="toggleRightMenu">
            <i class="fas fa-info-circle  sp__icon sp__icon--info"></i>
            <p class="sp__icon--text">INFO</p>
        </div>


        <!-- SP用infoメニューここから -->
        <div class="p-header__sp p-header__sp--right" v-bind:class="{'active' : isActiveRight}" v-on:click="toggleRightMenu">
            <div
                class="p-header__sp__icon__container p-header__sp__icon__container--right">
                <i class="fas fa-times p-header__sp__icon"></i>
                <p class="sp__icon--text">CLOSE</p>
            </div>
            <ul class="p-header__sp__menu p-header__sp__menu--right">
                <li class="p-header__sp__menu__list">
                    <a href="">このアプリについて</a>
                </li>
                <li class="p-header__sp__menu__list">
                    <a href="">プライバシーポリシー</a>
                </li>
                <li class="p-header__sp__menu__list">
                    <a href="contact.html">お問い合わせ</a>
                </li>
            </ul>
        </div>
        <!-- SP用infoメニューここまで -->

    </header>
</template>

<script>

    export default {
        name: "HeaderComponent",
        data: function () {
            return {
                //スマホヘッダーメニュー用
                isActiveLeft: false,
                isActiveRight: false
            }
        },
        props: {
            authcheck: Boolean,
            logout: String
        },
        computed: {},
        methods: {
            //ログアウト機能
            doLogout: function () {
                //axios使ってlogoutをpost送信
                axios.post(this.logout)
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                //ログアウト後トップページへ遷移
                window.location.href = '/'
            },
            //スマホ用USERメニュー開け閉め
            toggleLeftMenu: function(){
                this.isActiveLeft = !this.isActiveLeft
            },
            //スマホ用INFOメニュー開け閉め
            toggleRightMenu: function(){
                this.isActiveRight = !this.isActiveRight
            }
        }
    }
</script>

<style scoped>

</style>
