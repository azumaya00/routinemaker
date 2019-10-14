<template>
    <!-- ここからcontentにする -->
    <main class="l-main l-main--main">
        <div class="l-main__inner">
            <div class="p-procedure__container">
                <div class="p-procedure__text__container">
                    <p class="p-procedure__text p-procedure__text--left">今は</p>
                    <transition name="task" mode="out-in">
                        <p class="p-procedure__text p-procedure__text--center"
                           v-bind:key="currentTaskId">
                            {{tasks[currentTaskId - 1]}}
                        </p>
                    </transition>
                    <p class="p-procedure__text p-procedure__text--right">
                        をする時間です</p>
                </div>
                <!-- 次に進むボタン -->
                <div class="p-procedure__btn__group">
                    <button class="c-btn c-btn__round" v-on:click="goNext">
                        終わった！
                    </button>
                </div>

                <!-- 中断用リンク -->
                <div class="p-procedure__btn__group">
                    <button class="c-btn p-procedure__suspension"
                            v-on:click="suspendRoutine">途中でやめる
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- ここまでcontent -->
</template>

<script>
    export default {
        name: "ProceedComponent",
        data: function () {
            return {
                tasks: [],
                currentTaskId: 1
            }
        },
        props: {
            history: Object,
        },
        created: function () {
            //historiesテーブルからタスクのみの配列を作る
            for (let i = 0; i <= 9; i++) {
                let order = 'task' + i;
                if (this.history[order]) {
                    this.tasks.splice(i, 0, this.history[order])
                } else {
                    //タスクがnullの時は配列に入れない
                    continue;
                }
            }
        },
        computed: {},
        methods: {
            //終わったボタンの処理
            goNext: function () {
                if (this.tasks[this.currentTaskId]) {
                    //次のリストの中身があれば
                    //次のリストを表示する
                    this.currentTaskId++
                } else {
                    //リストの中身がnullになったら
                    //完了の行程へ
                    //idを変数に詰める
                    const id = this.history.id;

                    //axiosでリスト完了処理
                    axios.post('/routines/' + id + '/finish').then(function (response) {
                        console.log(response);
                        //保存後完了ページへ遷移
                        window.location.href = '/routines/complete'

                    })
                        .catch(function (error) {
                            console.log(error);
                        });
                }

            },
            //中断ボタンの処理
            suspendRoutine: function () {
                if (window.confirm('本当に中断しますか？')) {
                    //idを変数に詰める
                    const id = this.history.id;

                    //axiosでリスト完了処理
                    axios.post('/routines/' + id + '/suspend').then(function (response) {
                        console.log(response);
                    })
                        .catch(function (error) {
                            console.log(error);
                        });
                    //保存後マイページへ遷移
                    //データ反映を待つので1000ms後
                    setTimeout(function () {
                        window.location.href = '/mypage'
                    }, 1000)
                } else {
                    return
                }
            }
        }
    }
</script>

<style scoped>

</style>
