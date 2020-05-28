
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../../assets/js/bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import VueInternationalization from 'vue-i18n';
import VueRouter from 'vue-router';

//引入组件
import home from "../component/home.vue";
import about from "../component/about.vue";

Vue.use(VueInternationalization);
Vue.use(VueRouter);

const i18n = new VueInternationalization({
    locale: 'en',
    messages: window.vuei18nLocales,
});
const routes = [
    {path: "/home", component: home},
    {path: "/about", component: about}
];

var router = new VueRouter({
    routes
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var componentsample = new Vue({
    el: '#routersample',
    i18n,
    router, //注入到Vue实例中
    data: {
        textinput: 'Too hot, hot damn.'
    },

    methods: {
        changeLocale: function() {
            this.$i18n.locale = (this.$i18n.locale == 'cn') ? 'en' : 'cn';
        },
    }
});
