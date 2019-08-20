<template>
    <main class="l-main l-main--base--sub">
        <div class="l-main__inner">
            <div class="p-prepare__container">
                <h2 class="p-prepare__title">このリストを実行します</h2>
                <h3 class="p-prepare__list__title">
                    {{routine.title}}
                </h3>
                <div class="p-prepare__text">
                    <p>ドラッグ&ドロップで順番を変更できます。</p>
                </div>
                <!-- リストスタート -->
                <ul class="p-prepare__list">

                    <draggable v-model="tasks">
                        <transition-group name="prepare">
                            <li class="p-prepare__list__item"
                                v-for="item in tasks"
                                v-bind:key="item">
                                {{item}}
                            </li>
                        </transition-group>
                    </draggable>

                </ul>

                <button class="c-btn c-btn__square--middle c-btn--random"
                        v-on:click="doShuffle">
                    ランダムで順番を変える
                </button>
                <div class="c-btn__group p-prepare__btn__group">
                    <input
                        value="戻る" onclick="history.back();" type="button"
                        class="c-btn c-btn__square--small c-btn__square--small--back c-btn--base"
                    />
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
    import draggable from 'vuedraggable';

    export default {
        name: "PrepareComponent",
        components: {
            draggable,
        },
        data: function () {
            return {
                tasks: []
            }
        },
        props: {
            routine: Object,
        },
        created: function () {
            //historiesテーブルからタスクのみの配列を作る
            for (let i = 0; i <= 9; i++) {
                let order = 'task' + i
                if (this.routine[order]) {
                    this.tasks.splice(i, 0, this.routine[order])
                } else {
                    //タスクがnullの時は配列に入れない
                    continue
                }
            }
        },
        computed: {},
        methods: {
            //リストの順番をランダムに変える
            doShuffle: function () {
                this.tasks = _.shuffle(this.tasks)
            }
        }
    }
</script>

<style scoped>

</style>
