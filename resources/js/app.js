/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

//axios
import axios from 'axios'
Vue.prototype.$http = axios;

//router
import router from './settings/router.js'

//スムーススクロール
import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('titleshow-component', require('./components/TitleshowComponent.vue').default);

Vue.component('titleautocard-component', require('./components/TitleautocardComponent.vue').default);

Vue.component('autotitlelist-component', require('./components/AutotitlelistComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    router: router,
    el: '#app',
});
