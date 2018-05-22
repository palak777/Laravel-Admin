import Axios from 'axios';
import Vue from 'vue';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import VueToasted from 'vue-toasted';
import VeeValidate from 'vee-validate';

import Employee from './components/employee.vue';


Vue.use(VueAxios, Axios);
Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.use(VueToasted);

const routes = [

  {
    component: Employee,
    name: 'employee',
    path: '/admin/employee'
  }

];

const router=new VueRouter({
	routes:routes,
  mode: 'history'
});

const app = new Vue({
    el: '#app',
    data(){
    	return {
    		routes:routes,
    	}
    },
    router,
    store
});