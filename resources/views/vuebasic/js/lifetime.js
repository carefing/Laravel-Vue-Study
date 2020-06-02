
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

var myLifetime = new Vue({
    el: '#lifetime',

    data: {
        info: 'abcdefg',
        question: '',
        answer: 'I cannot give you an answer until you ask a question!'
    },

    computed: {
        // 计算属性(default with a getter)
        reversedInfo: function () {
            return this.info.split('').reverse().join('');
        },
        splitInfo: {
            // getter
            get: function () {
                return this.info.split('').join(',');
            },
            // setter
            set: function (newValue) {
                this.info = newValue.split(',').join('');
            }
        }
    },

    watch: {
        // 如果 `question` 发生改变，这个函数就会运行
        question: function (newQuestion, oldQuestion) {
            this.answer = 'Waiting for you to stop typing...';
            this.debouncedGetAnswer()
        }
    },

    methods: {
        getAnswer: function () {
            if (this.question.indexOf('?') === -1) {
                this.answer = 'Questions usually contain a question mark. ;-)';
                return
            }
            this.answer = 'Thinking...';
            var vm = this;
            axios.get('https://yesno.wtf/api')
                .then(function (response) {
                    vm.answer = _.capitalize(response.data.answer)
                })
                .catch(function (error) {
                    vm.answer = 'Error! Could not reach the API. ' + error
                })
        }
    },

    beforeCreate:function(){
        console.log("创建前========");
        console.log(this.info);
        console.log(this.$el);
    },
    created:function(){
        console.log("已创建========");
        console.log(this.info);
        console.log(this.$el);
        // `_.debounce` 是一个通过 Lodash 限制操作频率的函数。
        // 在这个例子中，我们希望限制访问 yesno.wtf/api 的频率
        // AJAX 请求直到用户输入完毕才会发出。想要了解更多关于
        // `_.debounce` 函数 (及其近亲 `_.throttle`) 的知识，
        // 请参考：https://lodash.com/docs#debounce
        this.debouncedGetAnswer = _.debounce(this.getAnswer, 500)
    },
    beforeMount:function(){
        console.log("mount之前========");
        console.log(this.info);
        console.log(this.$el);
    },
    mounted:function(){
        console.log("mounted========");
        console.log(this.info);
        console.log(this.$el);
    },
    beforeUpdate:function(){
        console.log("更新前========");
        console.log(this.info);
    },
    updated:function(){
        console.log("更新完成========");
        console.log(this.info);
    },
    beforeDestroy:function(){
        console.log("销毁前========");
        console.log(this.info);
        console.log(this.$el);
    },
    destroyed:function(){
        console.log("已销毁========");
        console.log(this.info);
        console.log(this.$el);
    }
});
