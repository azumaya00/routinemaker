<template>
    <main class="l-main l-main--accent">
        <div class="l-main__inner">
            <div class="p-complete__container">
                <h2 class="p-complete__title">全部終わったよ！</h2>
                <div class="p-complete__img__container">
                    <img src="/storage/winner.jpg" alt="well done"
                         class="p-complete__img">
                </div>
                <p class="p-complete__text">
                    お疲れ様でした<br>頑張ったね！
                </p>


                <!-- マイページへ戻る -->
                <div class="p-complete__btn__group">
                    <a href="/mypage"
                       class="c-btn c-btn__square--large c-btn--main">マイページへ</a>
                </div>

            </div>
        </div>
    </main>
</template>

<script>
//confetti読み込み
import confetti from 'canvas-confetti';
    export default {
        name: "CompleteComponent",
        created: function(){
            confetti({
                particleCount: 150,
                spread: 80,
                origin: {
                    y: 0.6
                }
            })
        }

    }
</script>

<style scoped>

</style>
