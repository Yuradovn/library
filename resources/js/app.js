import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './components/App'
import Vuesax from 'vuesax'
import router from './router/route';

import 'vuesax/dist/vuesax.css'
require('./bootstrap');

Vue.use(VueRouter);
Vue.use(Vuesax);

new Vue({
    render: h => h(App),
    router
  }).$mount('#app')
