<template>
    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-prepare__container">
                <h2 class="p-prepare__title">このリストを実行します</h2>
                <h3 class="p-prepare__list__title">
                    このリストのタイトル
                </h3>
                <div class="p-prepare__text">
                    <p>ドラッグ&ドロップで順番を変更できます。</p>
                </div>
                <!-- リストスタート -->
                <ul class="p-prepare__list">
                    <li class="p-prepare__list__item">
                        タスク1
                    </li>
                    <li class="p-prepare__list__item">
                        タスク2
                    </li>
                    <li class="p-prepare__list__item">
                        タスク3
                    </li>
                    <li class="p-prepare__list__item">
                        タスク4
                    </li>
                    <li class="p-prepare__list__item">
                        タスク5
                    </li>
                    <li class="p-prepare__list__item">
                        タスク6
                    </li>
                    <li class="p-prepare__list__item">
                        タスク7
                    </li>
                    <li class="p-prepare__list__item">
                        タスク8
                    </li>
                    <li class="p-prepare__list__item">
                        タスク9
                    </li>
                    <li class="p-prepare__list__item">
                        タスク10
                    </li>
                </ul>

                <button class="c-btn c-btn__square--middle c-btn--random">
                    ランダムで順番を変える
                </button>
                <div class="c-btn__group p-prepare__btn__group">
                    <a href="#"
                       class="c-btn c-btn__square--small c-btn c-btn__square--small--back c-btn--base">
                        戻る
                    </a>
                    <a href="#"
                       class="c-btn c-btn__square--small c-btn--accent">
                        始める!
                    </a>
                </div>
            </div>
        </div>

    </main>
</template>

<script>
    export default {
        name: "PrepareComponent"
    }
</script>

<style scoped>

</style>
