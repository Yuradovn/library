import Vue from 'vue';
import Vuex from 'vuex'
import VueRouter from 'vue-router';
import App from './components/App'
import Vuesax from 'vuesax'
import router from './router/route';

import 'vuesax/dist/vuesax.css'
require('./bootstrap');

Vue.use(VueRouter);
Vue.use(Vuesax);
Vue.use(Vuex)

Vue.component('Menu', require('./components/Menu.vue').default);

const store = new Vuex.Store({
  state: {
    user: null
  },
  mutations: {
      setAuthUser(state, user) {
          state.user = user;
      }
  },
  getters: {
      isLoggedIn(state) {
          return state.user !== null;
      }
  }
})

new Vue({
    render: h => h(App),
    router,
    store
  }).$mount('#app')
