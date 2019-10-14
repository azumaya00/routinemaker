/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


Vue.component('floating-button-component', require('./components/FloatingButtonComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('prepare-component', require('./components/PrepareComponent.vue').default);
Vue.component('proceed-component', require('./components/ProceedComponent.vue').default);
Vue.component('complete-component', require('./components/CompleteComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    data: {
        isActive: true
    },
    props: {},
    mounted: function () {
        this.isActive = true
        //マウント後1.2秒経ったらeraseMessageを呼ぶ
        setTimeout(this.eraseMessage, 1200)
    },
    methods: {
        //フラッシュメッセージを見えなくする
        eraseMessage: function(){
            this.isActive = false
        }
    }
});


