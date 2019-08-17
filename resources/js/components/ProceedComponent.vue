<template>
    <!-- ここからcontentにする -->
    <main class="l-main l-main--main">
        <div class="l-main__inner">
            <div class="p-procedure__container">
                <div class="p-procedure__text__container">
                    <p class="p-procedure__text p-procedure__text--left">今は</p>
                    <p class="p-procedure__text p-procedure__text--center">
                        数学の問題集
                    </p>
                    <p class="p-procedure__text p-procedure__text--right">
                        をする時間です</p>
                </div>
                <!-- 次に進むボタン -->
                <div class="p-procedure__btn__group">
                    <a href="#" class="c-btn c-btn__round">終わった！</a>
                </div>

                <!-- 中断用リンク -->
                <div class="p-procedure__btn__group">
                    <a href="#" class="c-btn p-procedure__suspension">途中でやめる</a>
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
            return {}
        },
        computed: {},
        methods: {}
    }
</script>

<style scoped>

</style>
