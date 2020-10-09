import Vue from 'vue';
import App from './App.vue';

export const eventEmitter = new Vue();
new Vue ({
    el: '#app',
    render: function (f) {
        return f(App);
    }
});

