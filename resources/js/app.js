
require('./bootstrap');

window.Vue = require('vue').default;
import Vue from 'vue'

// Router
import routers from './router';

import  BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue)

// VueProgressBar
import VueProgressBar from 'vue-progressbar';

Vue.use(VueProgressBar, {
    color: '#66FE5E',
    failedColor: 'red',
    thickness: '3px',
});


// sweetalert2
import Swal from 'sweetalert2';
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
window.Swal = Swal;
window.Toast = Toast;

 

Vue.component('main-component', require('./components/main.vue').default);



const app = new Vue({
    el: '#app',
    router: routers,
});
