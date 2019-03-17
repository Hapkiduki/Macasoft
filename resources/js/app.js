require('./bootstrap');

window.Vue = require('vue');


Vue.component('app', require('./components/AppComponent.vue').default);
Vue.component('users', require('./components/UsersComponent.vue').default);

import router from './routes'

const app = new Vue({
    el: '#app',
    router
});