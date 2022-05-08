import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);


// All Compoments
import home_component from './components/home.vue'
import test_component from './components/test.vue'


const routes = new VueRouter({
    mode: 'history',

    routes: [

        {
            path: '/',
            component: home_component,
            name: 'home',
        },

        {
            path: '/test',
            component: test_component,
            name: 'test',
        },

    ]
});






export default routes;