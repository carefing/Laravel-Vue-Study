
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../../assets/js/bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

var vuebasic = new Vue({
    el: '#vuebasic',

    data: {
        textinput: 'Too hot, hot damn.',

        libraries: ['jquery', 'node', 'd3', 'angular.js'],
        newlibrary: '',

        sortparam: 'id',
        filterkey: '',
        order: 'asc',
        frameworks: [
            {id: '001', framework: 'angular'},
            {id: '002', framework: 'd3'},
            {id: '003', framework: 'node'},
            {id: '004', framework: 'jquery'},
            {id: '005', framework: 'reveal.js'},
            {id: '006', framework: 'impress.js'},
            {id: '007', framework: 'backbone.js'},
            {id: '008', framework: 'meteor.js'},
            {id: '009', framework: 'express'},
            {id: '010', framework: 'moment'}
        ]
    },

    methods: {
        addLibrary: function () {
            if (this.newlibrary != '') {
                this.libraries.push(this.newlibrary);
            }
            this.newlibrary = '';
        },
        
        deleteLibrary: function () {
            this.libraries = [];
        },

        sortvia: function (sortparam) {
            this.order = this.order == 'asc' ? 'desc' : 'asc';
            this.sortparam = sortparam;
        }
    },

    computed: {
        orderFrameworks: function () {
            return _.orderBy(this.frameworks, this.sortparam, this.order);
        },

        searchFrameworks() {
            return this.filterkey ? this.frameworks.filter(framework => {
                return framework.framework.includes(this.filterkey);
            })
            : this.frameworks;
        }
    }
});
