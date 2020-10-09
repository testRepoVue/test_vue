import Vue from 'vue';
import VueResourse from 'vue-resource';
import App from './App.vue';

/**
 * vue-resource - не идет в комплекте с vue, устанавл отдельно nmp install vue-resource
 * доб плагин VueResourse в приложение
 * */
Vue.use(VueResourse);

new Vue ({
    el: '#app',
    render: function (f) {
        return f(App);
    }
})